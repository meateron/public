<?php

class jqSimple extends jqGrid
{
    protected function init()
    {
        #Set database table
        $this->table = 'bspb';

        #Make all columns editable by default
        $this->cols_default = array('editable' => true);

        #Set columns
        $this->cols = array(

            'contract' => array('label' => 'Контракт',
                'width' => 15,
                'align' => 'center',
                'editable' => false, //id is non-editable
            ),

            'service' => array('label' => 'Сервис',
                'width' => 15,
                'editrules' => array('required' => true),
            ),

            'id' => array('label' => 'ID Банка',
                'width' => 20,
                'editrules' => array('required' => true),
            ),

            'product' => array('label' => 'Продукт',
                'width' => 40,
                'editrules' => array('email' => true),
            ),

            'start' => array('label' => 'Начало',
                'width' => 15,
                'align' => 'center',
            ),

            'end' => array('label' => 'Конец',
                'width' => 15,
                'formatter' => 'numeric',
                'align' => 'center',
                'editable' => false,
            ),
        );

        #Set nav
        $this->nav = array('add' => true, 'edit' => true, 'del' => true);

        #Add filter toolbar
        $this->render_filter_toolbar = true;
    }
}