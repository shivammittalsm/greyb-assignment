<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Database\Expression\QueryExpression;
use Cake\Http\Exception\BadRequestException;

/**
 * Patent Controller
 *
 */
class PatentController extends AppController
{
    public function getQuery(): void
    {
        $this->request->allowMethod(['get']);
        $queryParams = $this->request->getQuery();

        $patentsTable = $this->getTableLocator()->get('Patents');

        $query = $patentsTable->find();

        if (!empty($queryParams['priority_year'])) {
            $year = (int)$queryParams['priority_year'];
            if ($year <= 1000 || $year > (int)date('Y')) {
                throw new BadRequestException("Invalid priority_year provided");
            }

            $query->where(function (QueryExpression $exp) use ($year) {
                return $exp->eq('EXTRACT(YEAR FROM priority_date)', $year, 'integer');
            });
        }

        if (!empty($queryParams['assignee'])) {
            $query->where(['assignee' => $queryParams['assignee']]);
        }

        if (empty($queryParams['priority_year']) && empty($queryParams['assignee'])) {
            throw new BadRequestException("No valid query parameters provided.");
        }

    
        $results = $query->limit(10)->all();

        $this->set([
            'success' => true,
            'data' => $results,
        ]);
        $this->viewBuilder()->setOption('serialize', ['success', 'data']);
    }
}