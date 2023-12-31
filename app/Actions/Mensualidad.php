<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Mensualidad extends AbstractAction
{
    public function getTitle()
    {
        return 'Mens Pagadas';
    }

    public function getIcon()
    {
        return 'voyager-dollar';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success',
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.pagos', ['id' => $this->data->id]);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'estudiantes';
    }

}
