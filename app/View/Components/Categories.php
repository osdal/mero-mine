<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Categories extends Component
{
    protected array $categories = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->categories = array_map(function($name){
            return (object)[
                'name' => $name
            ];
        },[
            'Гипсокартонные системы',
            'Утеплитель',
            'Строительные смеси',
            'Клевые смеси',
            'Строительная химия',
            'Пиломатериалы',
            'Листовые материалы',
            'Кровельные материалы',
            'Кладочные материалы',
            'Сыпучие материалы',
            'Лакокрасочные материалы',
            'Электрика',
            'Металлопрокат',
            'Крепеж',
            'Строительный инвентарь',
            'Уголки, Маяки',
            'Отопление и водопровод',
            'Напольное покрытие',
            'Обои и стеклохолст',
            'Вентиляция',
            'Окно и двери',
            'Акция',
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.categories',[
            'categories' => $this->categories,
        ]);
    }
}
