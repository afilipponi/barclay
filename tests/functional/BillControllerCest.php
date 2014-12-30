<?php

/**
 * Class BillControllerCest
 *
 * @SuppressWarnings("CamelCase")
 * @SuppressWarnings("short")
 */
class BillControllerCest
{

    /**
     * @param FunctionalTester $I
     */
    public function _after(FunctionalTester $I)
    {
    }

    /**
     * @param FunctionalTester $I
     */
    public function _before(FunctionalTester $I)
    {
        $I->amLoggedAs(['email' => 'thegrumpydictator@gmail.com', 'password' => 'james']);
    }

    /**
     * @param FunctionalTester $I
     */
    public function create(FunctionalTester $I)
    {
        $I->wantTo('create a bill');
        $I->amOnPage('/bills/create');
    }

    /**
     * @param FunctionalTester $I
     */
    public function delete(FunctionalTester $I)
    {
        $I->wantTo('delete a bill');
        $I->amOnPage('/bills/delete/1');
        $I->see('Delete "Huur"');
    }

    /**
     * @param FunctionalTester $I
     */
    public function destroy(FunctionalTester $I)
    {
        $I->wantTo('destroy a bill');
        $I->amOnPage('/bills/delete/1');
        $I->see('Delete "Huur"');
        $I->submitForm('#destroy', []);
        $I->see('The bill was deleted.');

    }

    /**
     * @param FunctionalTester $I
     */
    public function edit(FunctionalTester $I)
    {
        $I->wantTo('edit a bill');
        $I->amOnPage('/bills/edit/1');


    }

    /**
     * @param FunctionalTester $I
     */
    public function index(FunctionalTester $I)
    {
        $I->wantTo('see all bills');
        $I->amOnPage('/bills');
    }

    /**
     * @param FunctionalTester $I
     */
    public function rescan(FunctionalTester $I)
    {
        $I->wantTo('rescan a bill');
        $I->amOnPage('/bills/rescan/1');
        $I->see('Rescanned everything.');
    }

    /**
     * @param FunctionalTester $I
     */
    public function rescanInactive(FunctionalTester $I)
    {
        $I->wantTo('rescan an inactive bill');
        $I->amOnPage('/bills/rescan/2');
        $I->see('Inactive bills cannot be scanned.');
    }

    /**
     * @param FunctionalTester $I
     */
    public function show(FunctionalTester $I)
    {
        $I->wantTo('show a bill');
        $I->amOnPage('/bills/show/1');
        $I->see('Huur');
    }

    /**
     * @param FunctionalTester $I
     */
    public function store(FunctionalTester $I)
    {
        $I->wantTo('store a bill');
        $I->amOnPage('/bills/create');
        $I->submitForm(
            '#store', [
                        'name'               => 'Some bill',
                        'match'              => 'one,two',
                        'amount_min'         => 10,
                        'amount_max'         => 20,
                        'post_submit_action' => 'store',
                        'date'               => date('Y-m-d'),
                        'repeat_freq'        => 'monthly',
                        'skip'               => 0
                    ]
        );
        $I->see('Bill &quot;Some bill&quot; stored.');
    }

    /**
     * @param FunctionalTester $I
     */
    public function storeFail(FunctionalTester $I)
    {
        $I->wantTo('store a bill and fail');
        $I->amOnPage('/bills/create');
        $I->submitForm(
            '#store', [
                        'name'        => 'Some bill',
                        'match'       => '',
                        'amount_min'  => 10,
                        'amount_max'  => 20,
                        'date'        => date('Y-m-d'),
                        'repeat_freq' => 'monthly',
                        'skip'        => 0
                    ]
        );
        $I->dontSeeInDatabase('bills', ['name' => 'Some bill']);
        $I->see('Could not store bill');
    }

    /**
     * @param FunctionalTester $I
     */
    public function storeRecreate(FunctionalTester $I)
    {
        $I->wantTo('validate a bill and create another one');
        $I->amOnPage('/bills/create');
        $I->submitForm(
            '#store', [
                        'name'               => 'Some bill',
                        'match'              => 'one,two',
                        'amount_min'         => 10,
                        'amount_max'         => 20,
                        'post_submit_action' => 'create_another',
                        'date'               => date('Y-m-d'),
                        'repeat_freq'        => 'monthly',
                        'skip'               => 0,

                    ]
        );
        $I->see('Bill &quot;Some bill&quot; stored.');
    }

    /**
     * @param FunctionalTester $I
     */
    public function storeValidate(FunctionalTester $I)
    {
        $I->wantTo('validate a bill');
        $I->amOnPage('/bills/create');
        $I->submitForm(
            '#store', [
                        'name'               => 'Some bill',
                        'match'              => 'one,two',
                        'amount_min'         => 10,
                        'amount_max'         => 20,
                        'post_submit_action' => 'validate_only',
                        'date'               => date('Y-m-d'),
                        'repeat_freq'        => 'monthly',
                        'skip'               => 0,

                    ]
        );
        $I->see('form-group has-success has-feedback');
    }

    /**
     * @param FunctionalTester $I
     */
    public function update(FunctionalTester $I)
    {
        $I->wantTo('update a bill');
        $I->amOnPage('/bills/edit/1');
        $I->submitForm(
            '#update', [
                         'name'        => 'Some bill',
                         'match'       => 'bla,bla',
                         'amount_min'  => 10,
                         'amount_max'  => 20,
                         'date'        => date('Y-m-d'),
                         'repeat_freq' => 'monthly',
                         'skip'        => 0
                     ]
        );
        $I->see('Bill &quot;Some bill&quot; updated.');
    }

    /**
     * @param FunctionalTester $I
     */
    public function updateFail(FunctionalTester $I)
    {
        $I->wantTo('update a bill and fail');
        $I->amOnPage('/bills/edit/1');
        $I->submitForm(
            '#update', [
                         'name'        => 'Some bill',
                         'match'       => '',
                         'amount_min'  => 10,
                         'amount_max'  => 20,
                         'date'        => date('Y-m-d'),
                         'repeat_freq' => 'monthly',
                         'skip'        => 0
                     ]
        );
        $I->see('Could not update bill');
    }

    /**
     * @param FunctionalTester $I
     */
    public function updateReturn(FunctionalTester $I)
    {
        $I->wantTo('update a bill and return to edit it');
        $I->amOnPage('/bills/edit/1');
        $I->submitForm(
            '#update', [
                         'name'               => 'Some bill',
                         'match'              => 'bla,bla',
                         'amount_min'         => 10,
                         'amount_max'         => 20,
                         'post_submit_action' => 'return_to_edit',
                         'date'               => date('Y-m-d'),
                         'repeat_freq'        => 'monthly',
                         'skip'               => 0
                     ]
        );
        $I->see('Bill &quot;Some bill&quot; updated.');
    }

}