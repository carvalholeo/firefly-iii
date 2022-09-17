<?php
/*
 * CreateRequest.php
 * Copyright (c) 2021 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace FireflyIII\Api\V1\Requests\Models\Webhook;

use FireflyIII\Models\Webhook;
use FireflyIII\Rules\IsBoolean;
use FireflyIII\Support\Request\ChecksLogin;
use FireflyIII\Support\Request\ConvertsDataTypes;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateRequest
 */
class CreateRequest extends FormRequest
{
    use ChecksLogin, ConvertsDataTypes;

    /**
     * @return array
     */
    public function getData(): array
    {

        $triggers   = array_flip(Webhook::getTriggers());
        $responses  = array_flip(Webhook::getResponses());
        $deliveries = array_flip(Webhook::getDeliveries());

        $fields = [
            'title'    => ['title', 'convertString'],
            'active'   => ['active', 'boolean'],
            'trigger'  => ['trigger', 'convertString'],
            'response' => ['response', 'convertString'],
            'delivery' => ['delivery', 'convertString'],
            'url'      => ['url', 'convertString'],
        ];

        // this is the way.
        $return             = $this->getAllData($fields);
        $return['trigger']  = $triggers[$return['trigger']] ?? 0;
        $return['response'] = $responses[$return['response']] ?? 0;
        $return['delivery'] = $deliveries[$return['delivery']] ?? 0;

        return $return;
    }

    /**
     * Rules for this request.
     *
     * @return array
     */
    public function rules(): array
    {
        $triggers   = implode(',', Webhook::getTriggers());
        $responses  = implode(',', Webhook::getResponses());
        $deliveries = implode(',', Webhook::getDeliveries());

        return [
            'title'    => 'required|between:1,512|uniqueObjectForUser:webhooks,title',
            'active'   => [new IsBoolean],
            'trigger'  => sprintf('required|in:%s', $triggers),
            'response' => sprintf('required|in:%s', $responses),
            'delivery' => sprintf('required|in:%s', $deliveries),
            'url'      => ['required', 'url', 'uniqueWebhook'],
        ];
    }


}
