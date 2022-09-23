<?php

namespace App\Service;

use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class ChartService
{
    public function __construct(private ChartBuilderInterface $chartBuilder)
    {
    }

    public function polarAreaChart(array $data, array $labels): Chart
    {
        $chart = $this->chartBuilder->createChart(Chart::TYPE_POLAR_AREA);

        return $this->setting($chart, $data, $labels);
    }

    private function setting(Chart $chart, array $data, array $labels): Chart
    {
        return $chart->setData([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Sorties realisée',
                    'backgroundColor' => [
                        'rgb(255, 99, 132)',
                        'rgb(75, 192, 192)',
                        'rgb(255, 205, 86)',
                        'rgb(201, 203, 207)',
                        'rgb(54, 162, 235)',
                    ],
                    'borderColor' => '#eee',
                    'data' => $data,
                ],
            ],
        ])
            ->setOptions([
                'scales' => [
                    'y' => [
                        'suggestedMin' => 0,
                        'suggestedMax' => 10,
                    ],
                ],
                'plugins' => [
                    'legend' => [
                        'display' => true,
                        'position' => 'bottom',
                    ],
                    'title' => [
                        'text' => 'ENI-Sortie c\'est :',
                        'display' => true,
                        'position' => 'top',
                        'font' => [
                            'size' => 14,
                        ],
                    ],
                ],
            ]);
    }
}
