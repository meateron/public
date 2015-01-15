<?php

class jqGeneral extends jqGrid
{
    protected function init()
    {
        #Set database table
        $this->table = 'bspb';

        $this->cols_default = array('editable' => true);

        #Set columns
        $this->cols = array(

            'contract' => array('label' => 'Контракт',
                'width' => 10,
                'align' => 'center',
                'editable' => false,
                'search_op' => 'in',
            ),

            'service' => array('label' => 'Сервис',
                'width' => 35,
                'search_op' => 'in',
            ),

            'id' => array('label' => 'ID Банка',
                'width' => 35,
            ),

            'product' => array('label' => 'Продукт',
                'width' => 30,
            ),

            'start' => array('label' => 'Начало',
                'width' => 25,
                'align' => 'center',
            ),

            'end' => array('label' => 'Конец',
                'width' => 15,
                'formatter' => 'numeric',
                'align' => 'center',
            ),

        );

        #Set nav
        $this->nav = array('add' => true, 'edit' => true, 'del' => true);
    }

    protected function operData($r)
    {
        throw new jqGrid_Exception('ohhh');
        return $r;
    }
}