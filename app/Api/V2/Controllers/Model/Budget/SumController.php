<?php

/*
 * SumController.php
 * Copyright (c) 2022 james@firefly-iii.org
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

namespace FireflyIII\Api\V2\Controllers\Model\Budget;

use FireflyIII\Api\V2\Controllers\Controller;
use FireflyIII\Api\V2\Request\Generic\DateRequest;
use FireflyIII\Repositories\Budget\BudgetRepositoryInterface;
use Illuminate\Http\JsonResponse;

/**
 * Class SumController
 */
class SumController extends Controller
{
    private BudgetRepositoryInterface $repository;

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware(
            function ($request, $next) {
                $this->repository = app(BudgetRepositoryInterface::class);

                return $next($request);
            }
        );
    }

    /**
     * This endpoint is documented at:
     * https://api-docs.firefly-iii.org/?urls.primaryName=2.0.0%20(v2)#/budgets/getBudgetedForBudget
     *
     * @param DateRequest $request
     *
     * @return JsonResponse
     */
    public function budgeted(DateRequest $request): JsonResponse
    {
        die('deprecated use of thing.');
        $data      = $request->getAll();
        $result    = $this->repository->budgetedInPeriod($data['start'], $data['end']);
        $converted = $this->cerSum(array_values($result));

        return response()->json($converted);
    }

    /**
     * This endpoint is documented at:
     * https://api-docs.firefly-iii.org/?urls.primaryName=2.0.0%20(v2)#/budgets/getSpentForBudget
     *
     * @param DateRequest $request
     *
     * @return JsonResponse
     */
    public function spent(DateRequest $request): JsonResponse
    {
        die('deprecated use of thing.');
        $data      = $request->getAll();
        $result    = $this->repository->spentInPeriod($data['start'], $data['end']);
        $converted = $this->cerSum(array_values($result));

        return response()->json($converted);
    }
}
