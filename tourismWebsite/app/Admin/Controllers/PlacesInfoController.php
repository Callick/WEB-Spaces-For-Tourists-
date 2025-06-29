<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\PlacesInfo;

class PlacesInfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PlacesInfo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PlacesInfo());

        $grid->column('id', __('Id'));
        $grid->column('placeName', __('PlaceName'));
        $grid->column('placeShortdes', __('PlaceShortdes'));
        $grid->column('placeDescription', __('PlaceDescription'));
        $grid->column('image')->image();
        $grid->column('categoryName', __('CategoryName'));
        $grid->column('placeRating', __('PlaceRating'));
        $grid->column('placeLocation', __('PlaceLocation'));
        $grid->column('placeMapURL', __('PlaceMapURL'));
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
        $show = new Show(PlacesInfo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('placeName', __('PlaceName'));
        $show->field('placeShortdes', __('PlaceShortdes'));
        $show->field('placeDescription', __('PlaceDescription'));
        $show->field('image', __('Image'));
        $show->field('categoryName', __('CategoryName'));
        $show->field('placeRating', __('PlaceRating'));
        $show->field('placeLocation', __('PlaceLocation'));
        $show->field('placeMapURL', __('PlaceMapURL'));
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
        $form = new Form(new PlacesInfo());

        $form->text('placeName', __('PlaceName'));
        $form->text('placeShortdes', __('PlaceShortdes'));
        $form->textarea('placeDescription', __('PlaceDescription'));
        $form->image('image', __('Image'));
        $form->text('categoryName', __('CategoryName'));
        $form->decimal('placeRating', __('PlaceRating'));
        $form->text('placeLocation', __('PlaceLocation'));
        $form->text('placeMapURL', __('PlaceMapURL'));

        return $form;
    }
}
