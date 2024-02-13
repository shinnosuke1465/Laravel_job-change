<?php

namespace App\Admin\Controllers;

use App\Models\Agent;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AgentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Agent';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Agent());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('top_url', __('Top url'));
        $grid->column('login_url', __('Login url'));
        $grid->column('active', __('Active'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Agent::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('top_url', __('Top url'));
        $show->field('login_url', __('Login url'));
        $show->field('active', __('Active'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Agent());

        $form->text('name', __('Name'));
        $form->text('top_url', __('Top url'));
        $form->text('login_url', __('Login url'));
        $form->switch('active', __('Active'));

        return $form;
    }
}
