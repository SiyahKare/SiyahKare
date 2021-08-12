<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new'         => 'Save and new item',
    'save_action_save_and_edit'        => 'Save and edit this item',
    'save_action_save_and_back'        => 'Save and back',
    'save_action_save_and_preview'     => 'Save and preview',
    'save_action_changed_notification' => 'Default behaviour after saving has been changed.',

    // Create form
    'add'                 => 'Ekle',
    'back_to_all'         => 'hepsine geri dön',
    'cancel'              => 'İptal',
    'add_a_new'           => 'Yeni Ekle',

    // Edit form
    'edit'                 => 'Düzenle',
    'save'                 => 'Kaydet',

    // Translatable models
    'edit_translations' => 'Tercüme',
    'language'          => 'Dil',

    // CRUD table view
    'all'                       => 'Hepsi ',
    'in_the_database'           => 'veritabanında',
    'list'                      => 'List',
    'reset'                     => 'Sıfırla',
    'actions'                   => 'Hareketler',
    'preview'                   => 'Ön izleme',
    'delete'                    => 'Sil',
    'admin'                     => 'yönetici',
    'details_row'               => 'Bu, ayrıntılar satırıdır. İstediğiniz gibi değiştirin.',
    'details_row_loading_error' => 'Ayrıntılar yüklenirken bir hata oluştu. Lütfen tekrar deneyiniz.',
    'clone'                     => 'Klon',
    'clone_success'             => '<strong>Giriş klonlandı</strong><br>Bununla aynı bilgilerle yeni bir giriş eklendi.',
    'clone_failure'             => '<strong>Klonlama başarısız oldu</strong><br>Yeni giriş oluşturulamadı. Lütfen tekrar deneyin.',

    // Confirmation messages and bubbles
    'delete_confirm'                              => 'Bu öğeyi silmek istediğinizden emin misiniz?',
    'delete_confirmation_title'                   => 'Öğe Silindi',
    'delete_confirmation_message'                 => 'Öğe başarıyla silindi.',
    'delete_confirmation_not_title'               => 'silinmedi',
    'delete_confirmation_not_message'             => "Bir hata oldu. Öğeniz silinmemiş olabilir.",
    'delete_confirmation_not_deleted_title'       => 'silinmedi',
    'delete_confirmation_not_deleted_message'     => 'Hiçbir şey olmadı. Öğeniz güvende.',

    // Bulk actions
    'bulk_no_entries_selected_title'   => 'Hiçbir giriş seçilmedi',
    'bulk_no_entries_selected_message' => 'Lütfen üzerlerinde toplu işlem gerçekleştirmek için bir veya daha fazla öğe seçin.',

    // Bulk delete
    'bulk_delete_are_you_sure'   => 'Bu :number girişlerini silmek istediğinizden emin misiniz?',
    'bulk_delete_sucess_title'   => 'Girişler silindi',
    'bulk_delete_sucess_message' => ' öğeler silindi',
    'bulk_delete_error_title'    => 'Silinemedi',
    'bulk_delete_error_message'  => 'Bir veya daha fazla öğe silinemedi',

    // Bulk clone
    'bulk_clone_are_you_sure'   => 'Bu :number girişlerini klonlamak istediğinizden emin misiniz?',
    'bulk_clone_sucess_title'   => 'Klonlanan girdiler',
    'bulk_clone_sucess_message' => ' öğeler klonlandı.',
    'bulk_clone_error_title'    => 'Klonlama başarısız oldu',
    'bulk_clone_error_message'  => 'Bir veya daha fazla giriş oluşturulamadı. Lütfen tekrar deneyin.',

    // Ajax errors
    'ajax_error_title' => 'Hata',
    'ajax_error_text'  => 'Sayfa yüklenirken hata oluştu. Lütfen sayfayı yenileyin.',

    // DataTables translation
    'emptyTable'     => 'No data available in table',
    'info'           => 'Showing _START_ to _END_ of _TOTAL_ entries',
    'infoEmpty'      => 'No entries',
    'infoFiltered'   => '(filtered from _MAX_ total entries)',
    'infoPostFix'    => '.',
    'thousands'      => ',',
    'lengthMenu'     => '_MENU_ entries per page',
    'loadingRecords' => 'Loading...',
    'processing'     => 'Processing...',
    'search'         => 'Search',
    'zeroRecords'    => 'No matching entries found',
    'paginate'       => [
        'first'    => 'İlk',
        'last'     => 'Önceki',
        'next'     => 'Sonraki',
        'previous' => 'Öncesi',
    ],
    'aria' => [
        'sortAscending'  => ': sütunu artan şekilde sıralamak için etkinleştir',
        'sortDescending' => ': sütunu azalan sıralamak için etkinleştir',
    ],
    'export' => [
        'export'            => 'Dışa Aktar.',
        'copy'              => 'Kopyala',
        'excel'             => 'Excel',
        'csv'               => 'CSV',
        'pdf'               => 'PDF',
        'print'             => 'Print',
        'column_visibility' => 'Column visibility',
    ],

    // global crud - errors
    'unauthorized_access' => 'Unauthorized access - you do not have the necessary permissions to see this page.',
    'please_fix'          => 'Please fix the following errors:',

    // global crud - success / error notification bubbles
    'insert_success' => 'The item has been added successfully.',
    'update_success' => 'The item has been modified successfully.',

    // CRUD reorder view
    'reorder'                      => 'Reorder',
    'reorder_text'                 => 'Use drag&drop to reorder.',
    'reorder_success_title'        => 'Done',
    'reorder_success_message'      => 'Your order has been saved.',
    'reorder_error_title'          => 'Error',
    'reorder_error_message'        => 'Your order has not been saved.',

    // CRUD yes/no
    'yes' => 'Yes',
    'no'  => 'No',

    // CRUD filters navbar view
    'filters'        => 'Filters',
    'toggle_filters' => 'Toggle filters',
    'remove_filters' => 'Remove filters',
    'apply' => 'Apply',

    //filters language strings
    'today' => 'Today',
    'yesterday' => 'Yesterday',
    'last_7_days' => 'Last 7 Days',
    'last_30_days' => 'Last 30 Days',
    'this_month' => 'This Month',
    'last_month' => 'Last Month',
    'custom_range' => 'Custom Range',
    'weekLabel' => 'W',

    // Fields
    'browse_uploads'            => 'Yüklemelere göz atın',
    'select_all'                => 'Hepsini Seç.',
    'select_files'              => 'Dosyaları Seç',
    'select_file'               => 'Dosya seç.',
    'clear'                     => 'Temizle',
    'page_link'                 => 'Sayfa bağlantısı',
    'page_link_placeholder'     => 'http://example.com/your-desired-page',
    'internal_link'             => 'Dahili bağlantı',
    'internal_link_placeholder' => 'Internal slug. Ex: \'admin/page\' (no quotes) for \':url\'',
    'external_link'             => 'Dış bağlantı',
    'choose_file'               => 'Dosya Seç',
    'new_item'                  => 'Yeni Öğe',
    'select_entry'              => 'Bir giriş seçin',
    'select_entries'            => 'Girişleri seçin',

    //Table field
    'table_cant_add'    => 'Cannot add new :entity',
    'table_max_reached' => 'Maximum number of :max reached',

    // File manager
    'file_manager' => 'File Manager',

    // InlineCreateOperation
    'related_entry_created_success' => 'Related entry has been created and selected.',
    'related_entry_created_error' => 'Could not create related entry.',

    // returned when no translations found in select inputs
    'empty_translations' => '(empty)',
];
