<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class RecDocs extends AbstractAction
{
    public function getTitle()
    {
        return 'Rec Doctos';
    }

    public function getIcon()
    {
        return 'voyager-documentation';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-info',
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.recdocs', ['id' => $this->data->id]);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'estudiantes';
    }

}
