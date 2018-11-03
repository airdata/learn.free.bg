<?php
if ( !defined('K_INSTALLATION_IN_PROGRESS') ) die(); // cannot be loaded directly

/* couch_templates (id, description, title, k_order, custom_params, deleted, , , , , , , , , , , , , , , , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_TEMPLATES." VALUES ";

/* couch_fields (id, name, k_type, data, validator_msg, custom_toolbar, collapsed, no_xss_check, class, , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_FIELDS." VALUES ";

/* couch_pages (id, parent_id, creation_date, is_master, nested_parent_id, pointer_link_detail, file_meta, , , , , , , , , , , , , , , , , , , , , , , , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_PAGES." VALUES ";

/* couch_folders (id, template_id, k_desc, , , , , , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_FOLDERS." VALUES ";

/* couch_data_text (page_id, value, , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_DATA_TEXT." VALUES ";

/* couch_data_numeric (page_id, value, ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_DATA_NUMERIC." VALUES ";

/* couch_fulltext (page_id, content, ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_FULLTEXT." VALUES ";

/* couch_comments (id, page_id, email, data, , , , , , , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_COMMENTS." VALUES ";

/* couch_relations (pid, cid, , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_RELATIONS." VALUES ";

