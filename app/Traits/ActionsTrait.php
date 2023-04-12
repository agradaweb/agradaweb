<?php

namespace App\Traits;

trait ActionsTrait
{
    public function softdelete($subtitle, $confirm, $cancel)
    {
        if (!empty($this->selected)) {
            $this->dispatchBrowserEvent('delete', [
                'title'     => '¡Advertencia!',
                'subtitle'  => $subtitle,
                'icon'      => 'warning',
                'confirm'   => $confirm,
                'cancel'    => $cancel
            ]);
        } else {
            $this->dispatchBrowserEvent('delete', [
                'title' => 'No se seleccionó nada',
                'icon'  => 'error'
            ]);
        }
    }

    public function confirmedsoftDelete($modelClass, &$selected, &$selectAll, $subtitle)
    {
        if (class_exists($modelClass)) {
            $modelClass::whereIn('id', $selected)->update(['is_active' => 0]);
            $selected = [];
            $selectAll = false;

            $this->dispatchBrowserEvent('success', [
                'title'     => '¡Deshabilitado!',
                'subtitle'  => $subtitle,
                'icon'      => 'success',
            ]);
        }
    }

    public function cancelledSoftDelete($subtitle)
    {
        $this->dispatchBrowserEvent('cancelled', [
            'title'     => '¡Cancelado!',
            'subtitle'  => $subtitle,
            'icon'      => 'error',
        ]);
    }

    public function enable($modelClass, &$selected, &$selectAll, $subtitle)
    {
        if (class_exists($modelClass)) {
            $modelClass::whereIn('id', $selected)->update(['is_active' => 1]);
            $selected = [];
            $selectAll = false;

            $this->dispatchBrowserEvent('success', [
                'title'     => '¡Recuperado!',
                'subtitle'  => $subtitle,
                'icon'      => 'success',
            ]);
        }
    }

    public function forcedelete($subtitle, $confirm)
    {
        if (!empty($this->selected)) {
            $this->dispatchBrowserEvent('forcedelete', [
                'title'     => '¡Advertencia!',
                'subtitle'  => $subtitle,
                'icon'      => 'warning',
                'confirm'   => $confirm
            ]);
        } else {
            $this->dispatchBrowserEvent('delete', [
                'title' => 'No se seleccionó nada',
                'icon'  => 'error'
            ]);
        }
    }

    public function removePermanent($modelClass, &$selected, &$selectAll, $subtitle)
    {
        if (class_exists($modelClass)) {
            $modelClass::whereIn('id', $selected)->forceDelete();
            $selected = [];
            $selectAll = false;

            $this->dispatchBrowserEvent('success', [
                'title'     => '¡Eliminado!',
                'subtitle'  => $subtitle,
                'icon'      => 'success',
            ]);
        }
    }
}
