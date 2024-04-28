<?php

/**
 * form.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

// Ignore this comment

declare(strict_types=1);

return [
    // new user:
    'bank_name'                   => 'Bank name',
    'bank_balance'                => 'Balance',
    'current_balance' => 'Current balance',
    'savings_balance'             => 'Savings balance',
    'credit_card_limit'           => 'Credit card limit',
    'automatch'                   => 'Match automatically',
    'skip'                        => 'Skip',
    'enabled'                     => 'Enabled',
    'name'                        => 'Name',
    'active'                      => 'Active',
    'amount_min'                  => 'Minimum amount',
    'amount_max'                  => 'Maximum amount',
    'match'                       => 'Matches on',
    'strict'                      => 'Strict mode',
    'repeat_freq'                 => 'Repeats',
    'object_group'                => 'Group',
    'location'                    => 'Location',
    'update_channel'              => 'Update channel',
    'currency_id'                 => 'Currency',
    'transaction_currency_id'     => 'Currency',
    'auto_budget_currency_id'     => 'Currency',
    'external_ip'                 => 'Your server\'s external IP',
    'attachments'                 => 'Attachments',
    'BIC'                         => 'BIC',
    'verify_password'             => 'Verify password security',
    'source_account'              => 'Source account',
    'destination_account'         => 'Destination account',
    'asset_destination_account'   => 'Destination account',
    'include_net_worth'           => 'Include in net worth',
    'asset_source_account'        => 'Source account',
    'journal_description'         => 'Description',
    'note'                        => 'Notes',
    'currency'                    => 'Currency',
    'account_id'                  => 'Asset account',
    'budget_id'                   => 'Budget',
    'bill_id'                     => 'Bill',
    'opening_balance'             => 'Opening balance',
    'tagMode'                     => 'Tag mode',
    'virtual_balance'             => 'Virtual balance',

    // Ignore this comment

    'targetamount'                => 'Target amount',
    'account_role'                => 'Account role',
    'opening_balance_date'        => 'Opening balance date',
    'cc_type'                     => 'Credit card payment plan',
    'cc_monthly_payment_date'     => 'Credit card monthly payment date',
    'piggy_bank_id'               => 'Piggy bank',
    'returnHere'                  => 'Return here',
    'returnHereExplanation'       => 'After storing, return here to create another one.',
    'returnHereUpdateExplanation' => 'After updating, return here.',
    'description'                 => 'Description',
    'expense_account'             => 'Expense account',
    'revenue_account'             => 'Revenue account',
    'decimal_places'              => 'Decimal places',
    'destination_amount'          => 'Amount (destination)',
    'new_email_address'           => 'New email address',
    'verification'                => 'Verification',
    'api_key'                     => 'API key',
    'remember_me'                 => 'Remember me',
    'liability_type_id'           => 'Liability type',
    'liability_type'              => 'Liability type',
    'interest'                    => 'Interest',
    'interest_period'             => 'Interest period',
    'extension_date'              => 'Extension date',
    'type'                        => 'Type',
    'convert_Withdrawal'          => 'Convert withdrawal',
    'convert_Deposit'             => 'Convert deposit',
    'convert_Transfer'            => 'Convert transfer',
    'amount'                      => 'Amount',
    'foreign_amount'              => 'Foreign amount',
    'date'                        => 'Date',
    'interest_date'               => 'Interest date',
    'book_date'                   => 'Book date',
    'process_date'                => 'Processing date',
    'category'                    => 'Category',
    'tags'                        => 'Tags',
    'deletePermanently'           => 'Delete permanently',
    'cancel'                      => 'Cancel',
    'targetdate'                  => 'Target date',
    'startdate'                   => 'Start date',
    'tag'                         => 'Tag',
    'under'                       => 'Under',
    'symbol'                      => 'Symbol',
    'code'                        => 'Code',
    'iban'                        => 'IBAN',
    'account_number'              => 'Account number',
    'creditCardNumber'            => 'Credit card number',
    'has_headers'                 => 'Headers',
    'date_format'                 => 'Date format',
    'specifix'                    => 'Bank- or file specific fixes',
    'attachments[]'               => 'Attachments',
    'title'                       => 'Title',
    'notes'                       => 'Notes',
    'filename'                    => 'File name',
    'mime'                        => 'Mime type',
    'size'                        => 'Size',
    'trigger'                     => 'Trigger',
    'stop_processing'             => 'Stop processing',
    'start_date'                  => 'Start of range',
    'end_date'                    => 'End of range',
    'enddate'                     => 'End date',
    'move_rules_before_delete'    => 'Rule group',
    'start'                       => 'Start of range',
    'end'                         => 'End of range',
    'delete_account'              => 'Delete account ":name"',
    'delete_webhook'              => 'Delete webhook ":title"',
    'delete_bill'                 => 'Delete bill ":name"',
    'delete_budget'               => 'Delete budget ":name"',
    'delete_category'             => 'Delete category ":name"',
    'delete_currency'             => 'Delete currency ":name"',
    'delete_journal'              => 'Delete transaction with description ":description"',
    'delete_attachment'           => 'Delete attachment ":name"',
    'delete_rule'                 => 'Delete rule ":title"',
    'delete_rule_group'           => 'Delete rule group ":title"',
    'delete_link_type'            => 'Delete link type ":name"',
    'delete_user'                 => 'Delete user ":email"',
    'delete_recurring'            => 'Delete recurring transaction ":title"',
    'user_areYouSure'             => 'If you delete user ":email", everything will be gone. There is no undo, undelete or anything. If you delete yourself, you will lose access to this instance of Firefly III.',
    'attachment_areYouSure'       => 'Are you sure you want to delete the attachment named ":name"?',
    'account_areYouSure'          => 'Are you sure you want to delete the account named ":name"?',
    'account_areYouSure_js'       => 'Are you sure you want to delete the account named "{name}"?',
    'bill_areYouSure'             => 'Are you sure you want to delete the bill named ":name"?',
    'rule_areYouSure'             => 'Are you sure you want to delete the rule titled ":title"?',
    'object_group_areYouSure'     => 'Are you sure you want to delete the group titled ":title"?',
    'ruleGroup_areYouSure'        => 'Are you sure you want to delete the rule group titled ":title"?',
    'budget_areYouSure'           => 'Are you sure you want to delete the budget named ":name"?',
    'webhook_areYouSure'          => 'Are you sure you want to delete the webhook named ":title"?',
    'category_areYouSure'         => 'Are you sure you want to delete the category named ":name"?',
    'recurring_areYouSure'        => 'Are you sure you want to delete the recurring transaction titled ":title"?',
    'currency_areYouSure'         => 'Are you sure you want to delete the currency named ":name"?',
    'piggyBank_areYouSure'        => 'Are you sure you want to delete the piggy bank named ":name"?',
    'journal_areYouSure'          => 'Are you sure you want to delete the transaction described ":description"?',
    'mass_journal_are_you_sure'   => 'Are you sure you want to delete these transactions?',

    // Ignore this comment

    'tag_areYouSure'              => 'Are you sure you want to delete the tag ":tag"?',
    'journal_link_areYouSure'     => 'Are you sure you want to delete the link between <a href=":source_link">:source</a> and <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Are you sure you want to delete the link type ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => 'Deleting stuff from Firefly III is permanent and cannot be undone.',
    'mass_make_selection'         => 'You can still prevent items from being deleted by removing the checkbox.',
    'delete_all_permanently'      => 'Delete selected permanently',
    'update_all_journals'         => 'Update these transactions',
    'also_delete_transactions'    => 'The only transaction connected to this account will be deleted as well.|All :count transactions connected to this account will be deleted as well.',
    'also_delete_transactions_js' => 'No transactions|The only transaction connected to this account will be deleted as well.|All {count} transactions connected to this account will be deleted as well.',
    'also_delete_connections'     => 'The only transaction linked with this link type will lose this connection.|All :count transactions linked with this link type will lose their connection.',
    'also_delete_rules'           => 'The only rule connected to this rule group will be deleted as well.|All :count rules connected to this rule group will be deleted as well.',
    'also_delete_piggyBanks'      => 'The only piggy bank connected to this account will be deleted as well.|All :count piggy bank connected to this account will be deleted as well.',
    'also_delete_piggyBanks_js'   => 'No piggy banks|The only piggy bank connected to this account will be deleted as well.|All {count} piggy banks connected to this account will be deleted as well.',
    'not_delete_piggy_banks'      => 'The piggy bank connected to this group will not be deleted.|The :count piggy banks connected to this group will not be deleted.',
    'bill_keep_transactions'      => 'The only transaction connected to this bill will not be deleted.|All :count transactions connected to this bill will be spared deletion.',
    'budget_keep_transactions'    => 'The only transaction connected to this budget will not be deleted.|All :count transactions connected to this budget will be spared deletion.',
    'category_keep_transactions'  => 'The only transaction connected to this category will not be deleted.|All :count transactions connected to this category will be spared deletion.',
    'recurring_keep_transactions' => 'The only transaction created by this recurring transaction will not be deleted.|All :count transactions created by this recurring transaction will be spared deletion.',
    'tag_keep_transactions'       => 'The only transaction connected to this tag will not be deleted.|All :count transactions connected to this tag will be spared deletion.',
    'check_for_updates'           => 'Check for updates',
    'liability_direction'         => 'Liability in/out',
    'delete_object_group'         => 'Delete group ":title"',
    'email'                       => 'Email address',
    'password'                    => 'Password',
    'password_confirmation'       => 'Password (again)',
    'blocked'                     => 'Is blocked?',
    'blocked_code'                => 'Reason for block',
    'login_name'                  => 'Login',
    'is_owner'                    => 'Is admin?',
    'url'                         => 'URL',
    'bill_end_date'               => 'End date',

    // import
    'apply_rules'                 => 'Apply rules',
    'artist'                      => 'Artist',
    'album'                       => 'Album',
    'song'                        => 'Song',

    // admin
    'domain'                      => 'Domain',
    'single_user_mode'            => 'Disable user registration',
    'is_demo_site'                => 'Is demo site',

    // import
    'configuration_file'          => 'Configuration file',
    'csv_comma'                   => 'A comma (,)',
    'csv_semicolon'               => 'A semicolon (;)',
    'csv_tab'                     => 'A tab (invisible)',
    'csv_delimiter'               => 'CSV field delimiter',
    'client_id'                   => 'Client ID',
    'app_id'                      => 'App ID',
    'secret'                      => 'Secret',
    'public_key'                  => 'Public key',
    'country_code'                => 'Country code',
    'provider_code'               => 'Bank or data-provider',
    'fints_url'                   => 'FinTS API URL',
    'fints_port'                  => 'Port',
    'fints_bank_code'             => 'Bank code',
    'fints_username'              => 'Username',
    'fints_password'              => 'PIN / Password',
    'fints_account'               => 'FinTS account',
    'local_account'               => 'Firefly III account',

    // Ignore this comment

    'from_date'                   => 'Date from',
    'to_date'                     => 'Date to',
    'due_date'                    => 'Due date',
    'payment_date'                => 'Payment date',
    'invoice_date'                => 'Invoice date',
    'internal_reference'          => 'Internal reference',
    'inward'                      => 'Inward description',
    'outward'                     => 'Outward description',
    'rule_group_id'               => 'Rule group',
    'transaction_description'     => 'Transaction description',
    'first_date'                  => 'First date',
    'transaction_type'            => 'Transaction type',
    'repeat_until'                => 'Repeat until',
    'recurring_description'       => 'Recurring transaction description',
    'repetition_type'             => 'Type of repetition',
    'foreign_currency_id'         => 'Foreign currency',
    'repetition_end'              => 'Repetition ends',
    'repetitions'                 => 'Repetitions',
    'calendar'                    => 'Calendar',
    'weekend'                     => 'Weekend',
    'client_secret'               => 'Client secret',
    'withdrawal_destination_id'   => 'Destination account',
    'deposit_source_id'           => 'Source account',
    'expected_on'                 => 'Expected on',
    'paid'                        => 'Paid',
    'auto_budget_type'            => 'Auto-budget',
    'auto_budget_amount'          => 'Auto-budget amount',
    'auto_budget_period'          => 'Auto-budget period',
    'collected'                   => 'Collected',
    'submitted'                   => 'Submitted',
    'key'                         => 'Key',
    'value'                       => 'Content of record',
    'webhook_delivery'            => 'Delivery',
    'webhook_response'            => 'Response',
    'webhook_trigger'             => 'Trigger',
];
// Ignore this comment
