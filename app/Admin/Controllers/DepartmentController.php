<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Department;

class DepartmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Department';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Department());

        $grid->column('id', __('Id'));
        $grid->column('code', __('Code'));
        $grid->column('name', __('Name'));
        $grid->column('college', __('College'));
        $grid->column('Status', __('Status'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Department::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('code', __('Code'));
        $show->field('name', __('Name'));
        $show->field('college', __('College'));
        $show->field('Status', __('Status'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Department());

        $form->text('code', __('Code'));
        $form->text('name', __('Name'));
        $form->text('college', __('College'));
        $form->text('Status', __('Status'));

        return $form;
    }
}
