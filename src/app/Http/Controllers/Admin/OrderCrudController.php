<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrderRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OrderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OrderCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Order::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/order');
        CRUD::setEntityNameStrings('order', 'orders');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name_collection');
        CRUD::column('company_collection');
        CRUD::column('address_line_1_collection');
        CRUD::column('address_line_2_collection');
        CRUD::column('city_collection');
        CRUD::column('county_collection');
        CRUD::column('postcode_collection');
        CRUD::column('country_collection');
        CRUD::column('phone_collection');
        CRUD::column('email_collection');
        CRUD::column('name_delivery');
        CRUD::column('company_delivery');
        CRUD::column('address_line_1_delivery');
        CRUD::column('address_line_2_delivery');
        CRUD::column('city_delivery');
        CRUD::column('county_delivery');
        CRUD::column('postcode_delivery');
        CRUD::column('country_delivery');
        CRUD::column('phone_delivery');
        CRUD::column('email_delivery');
        CRUD::column('terms_and_conditions');
        CRUD::column('product_id');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(OrderRequest::class);

        CRUD::field('name_collection');
        CRUD::field('company_collection');
        CRUD::field('address_line_1_collection');
        CRUD::field('address_line_2_collection');
        CRUD::field('city_collection');
        CRUD::field('county_collection');
        CRUD::field('postcode_collection');
        CRUD::field('country_collection');
        CRUD::field('phone_collection');
        CRUD::field('email_collection');
        CRUD::field('name_delivery');
        CRUD::field('company_delivery');
        CRUD::field('address_line_1_delivery');
        CRUD::field('address_line_2_delivery');
        CRUD::field('city_delivery');
        CRUD::field('county_delivery');
        CRUD::field('postcode_delivery');
        CRUD::field('country_delivery');
        CRUD::field('phone_delivery');
        CRUD::field('email_delivery');
        CRUD::field('terms_and_conditions');
        CRUD::field('product_id');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
