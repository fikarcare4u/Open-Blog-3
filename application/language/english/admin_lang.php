<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Language variable for the admin control panel
 */

$lang['yes']								= 'Yes';
$lang['no']									= 'No';
$lang['pages']								= 'Pages';
$lang['blog']								= 'Blog';

// Settings
$lang['settings_help_txt']					= "Settings allow you to change how your website performs certain actions and basic information like your site's name.";
$lang['allow_comments_label']				= "Allow Comments";
$lang['allow_comments_desc']				= "Do you want to allow comments on your blog posts?";
$lang['base_controller_label']				= "Base Controller (BETA)";
$lang['base_controller_desc']				= "Choose where the homepage is...";
$lang['blog_description_label']				= "Blog Description";
$lang['blog_description_desc']				= "Enter a short description (or tag line) for your blog.";
$lang['category_list_limit_label']			= "Category Limit";
$lang['category_list_limit_desc']			= "Choose how may items you would like shown when listing categories on the homepage.";
$lang['enable_atom_comments_label']			= "Enable ATOM Comments";
$lang['enable_atom_comments_desc']			= "Do you want to enable the ATOM comments feed for your blog?";
$lang['enable_atom_posts_label']			= "Enable ATOM Posts";
$lang['enable_atom_posts_desc']				= "Do you want to enable the ATOM posts feed for your blog?";
$lang['enable_rss_comments_label']			= "Enable RSS Comments";
$lang['enable_rss_comments_desc']			= "Do you want to enable the RSS comments feed for your blog?";
$lang['enable_rss_posts_label']				= "Enable RSS Posts";
$lang['enable_rss_posts_desc']				= "Do you want to enable the RSS posts feed for your blog?";
$lang['links_per_box_label']				= "Link Limit";
$lang['links_per_box_desc']					= "Choose how may items you would like shown when listing links on the homepage.";
$lang['mod_non_user_comments_label']		= "Moderate Non User Comments";
$lang['mod_non_user_comments_desc']			= "Do you want to moderate non-users and non-logged in users?";
$lang['mod_user_comments_label']			= "Moderate User Comments";
$lang['mod_user_comments_desc']				= "Do you want to moderate logged in users?";
$lang['months_per_archive_label']			= "Archive Limit";
$lang['months_per_archive_desc']			= "Choose how may items you would like shown when listing archives on the homepage";
$lang['posts_per_page_label']				= "Posts per Page Limit";
$lang['posts_per_page_desc']				= "How many blog posts would you like to show on each page of your blog?";
$lang['recaptcha_private_key_label']		= "Google Recaptcha Private Key";
$lang['recaptcha_private_key_desc']			= "Enter the PRIVATE key provided by google.";
$lang['recaptcha_site_key_label']			= "Google Recaptcha Site Key";
$lang['recaptcha_site_key_desc']			= "Enter the SITE key provided by google.";
$lang['site_name_label']					= "Site Name";
$lang['site_name_desc']						= "Enter the name of your website.";
$lang['theme_image_label']					= "";
$lang['theme_image_desc']					= "";
$lang['use_recaptcha_label']				= "Enable Recaptcha";
$lang['use_recaptcha_desc']					= 'Whould you like to enable Google Recaptcha for your site to help elimitate SPAM and comment moderation? <a href="https://www.google.com/recaptcha/intro/" target="_blank">More Info <sup><i class="fa fa-external-link"></i></sup></a>';
$lang['use_honeypot_label']					= "Enable Form Honey Pots";
$lang['use_honeypot_desc']					= "To help prevent SPAM, you can use a honey pot, a SPAMmer filling in a hidden field that should not be. This will help protect your comment and registration forms from robots but not humans. ";



// Links
$lang['links_hdr']							= "Links";
$lang['link_remove_btn']					= "Remove Link";
$lang['link_edit_btn']						= "Edit Link";
$lang['index_add_new_link']					= "Add New Link";
$lang['add_link_subheading']				= "Please add the link information below. These are external links, make sure to prepend http:// or https:// to your link url.";
$lang['link_form_name']						= "Link Name";
$lang['link_form_url']						= "http://";
$lang['link_form_desc']						= "Description";
$lang['link_form_position']					= "Order";
$lang['link_form_target']					= "Target";
$lang['link_form_visibility']				= "Visibility";
$lang['blank_window']						= "Open in new window";
$lang['same_window']						= "Open in same window";
$lang['visible']							= "Visible";
$lang['not_visible']						= "Hidden";
$lang['save_link_btn']						= "Save Link";
$lang['link_added_success_resp']			= "Link added successfully";
$lang['link_added_fail_resp']				= "Could not add Link.  Please try agian.";
$lang['link_removed_success_resp']			= "Link removed successfully";
$lang['link_removed_fail_resp']				= "Could not remove Link.  Please try agian.";
$lang['link_update_success_resp']			= "Link updated successfully";
$lang['link_update_fail_resp']				= "Could not update Link.  Please try agian.";



// Categories
$lang['cats_hdr']							= "Categories";
$lang['cat_remove_btn']						= "Remove Category";
$lang['cat_edit_btn']						= "Edit Category";
$lang['index_add_new_cat']					= "Add New Category";
$lang['add_cat_subheading']					= "Please add the category information below.";
$lang['cat_form_name']						= "Category Name";
$lang['cat_form_url']						= "(same as above, all lowercase, no spaces)";
$lang['cat_form_desc']						= "Description";
$lang['blank_window']						= "Open in new window";
$lang['same_window']						= "Open in same window";
$lang['visible']							= "Visible";
$lang['not_visible']						= "Hidden";
$lang['save_cat_btn']						= "Save Category";
$lang['cat_added_success_resp']				= "Category added successfully";
$lang['cat_added_fail_resp']				= "Could not add Category.  Please try agian.";
$lang['cat_removed_success_resp']			= "Category removed successfully";
$lang['cat_removed_fail_resp']				= "Could not remove Category.  Please try agian.";
$lang['cat_update_success_resp']			= "Category updated successfully";
$lang['cat_update_fail_resp']				= "Could not update Category.  Please try agian.";


// pages
$lang['pages_hdr']							= "Pages";
$lang['optional_hdr']						= "Optional";
$lang['optional_help_text']					= "While the options below are optional, they are highly recommended and greatly help with Search Engine Optimization (SEO). We also generate meta tags for facebook and twitter with these values.";
$lang['page_remove_btn']					= "Remove Page";
$lang['page_edit_btn']						= "Edit Page";
$lang['index_add_new_page']					= "Add New Page";
$lang['index_edit_page']					= "Edit Page";
$lang['save_page_btn']						= "Save Page";
$lang['page_added_success_resp']			= "Page added successfully";
$lang['page_added_fail_resp']				= "Could not add Page.  Please try agian.";
$lang['page_removed_success_resp']			= "Page removed successfully";
$lang['page_removed_fail_resp']				= "Could not remove Page.  Please try agian.";
$lang['page_update_success_resp']			= "Page updated successfully";
$lang['page_update_fail_resp']				= "Could not update Page.  Please try agian.";
$lang['page_form_title_text']				= "Page Title";
$lang['page_form_title_help_text']			= "Enter the title of your page.";
$lang['page_form_status_text']				= "Status";
$lang['page_form_status_help_text']			= "Choose if you want the page to be Live or Draft.";
$lang['page_form_status_active']			= "Live";
$lang['page_form_status_inactive']			= "Draft";
$lang['page_form_content_text']				= "Page Content";
$lang['page_form_content_help_text']		= "Enter the content of your page below. Use the editor to help you format with Markdown.";
$lang['page_form_meta_title_text']			= "META Title";
$lang['page_form_meta_title_help_text']		= "Usually the same as your page title, but you can enter a different one here.";
$lang['page_form_meta_keywords_text']		= "META Keywords";
$lang['page_form_meta_keywords_help_text']	= "Enter the keywords for this page seperated by commas.";
$lang['page_form_meta_desc_text']			= "META Description";
$lang['page_form_meta_desc_help_text']		= "Enter the description for this page.  It's best to keep it between 50 and 100 characters.";
$lang['page_form_home_text']				= "Homepage";
$lang['page_form_home_help_text']			= "Check the box if this page is the homepage. You must choose Pages to be the default controller in Settings.  Any other page currently marked as the homepage will be removed as the homepage.";
$lang['page_form_url_title_text']			= "URL Title";
$lang['page_form_url_title_help_text']		= "This is the 'slug' shown in the URL of your page. If you change this value, there must be NO spaces between words, instead, used dashes. <br>IE: new-url-title";
$lang['page_form_redirect_text']			= "Redirection";
$lang['page_form_redirect_help_text']		= "If you change the URL Title above we automatically set up an HTTP 301 (perminent) redirect for you so the old url_title points to the new page url_title. Here, you can override the default settings.";
$lang['page_form_redirect_none']			= "Do Not Redirect Old URL Title";
$lang['page_form_redirect_perm']			= "Perminently Redirect to new URL Title";
$lang['page_form_redirect_temp']			= "Temporarily Redirect to new URL Title";



// posts
$lang['posts_hdr']							= "Posts";
$lang['optional_hdr']						= "Optional";
$lang['optional_help_text']					= "While the options below are optional, they are highly recommended and greatly help with Search Engine Optimization (SEO). We also generate meta tags for facebook and twitter with these values.";
$lang['post_remove_btn']					= "Remove Post";
$lang['post_edit_btn']						= "Edit Post";
$lang['index_add_new_post']					= "Add New Post";
$lang['index_edit_post']					= "Edit Post";
$lang['save_post_btn']						= "Save Post";
$lang['post_added_success_resp']			= "Post added successfully";
$lang['post_added_fail_resp']				= "Could not add post.  Please try agian.";
$lang['post_removed_success_resp']			= "Post removed successfully";
$lang['post_removed_fail_resp']				= "Could not remove post.  Please try agian.";
$lang['post_update_success_resp']			= "post updated successfully";
$lang['post_update_fail_resp']				= "Could not update post.  Please try agian.";
$lang['post_form_title_text']				= "Post Title";
$lang['post_form_title_help_text']			= "Enter the title of your post.";
$lang['post_form_status_text']				= "Status";
$lang['post_form_status_help_text']			= "Choose if you want the post to be Live or Draft.";
$lang['post_form_status_active']			= "Live";
$lang['post_form_status_inactive']			= "Draft";
$lang['post_form_content_text']				= "Post Content";
$lang['post_form_content_help_text']		= "Enter the content of your post below. Use the editor to help you format with Markdown.";
$lang['post_form_excerpt_text']				= "Post Excerpt";
$lang['post_form_excerpt_help_text']		= "Enter a short ~200 character excerpt (teaser) of your post below.";
$lang['post_form_cats_help_text']			= "Choose any categories.  To choose multiple categories press CMD/CTRL + Click your choices.";
$lang['post_form_meta_title_text']			= "META Title";
$lang['post_form_meta_title_help_text']		= "Usually the same as your post title, but you can enter a different one here.";
$lang['post_form_meta_keywords_text']		= "META Keywords";
$lang['post_form_meta_keywords_help_text']	= "Enter the keywords for this post seperated by commas.";
$lang['post_form_meta_desc_text']			= "META Description";
$lang['post_form_meta_desc_help_text']		= "Enter the description for this post.  It's best to keep it between 50 and 100 characters.";
$lang['post_form_home_text']				= "Homepage";
$lang['post_form_home_help_text']			= "Check the box if this post is the homepage. You must choose posts to be the default controller in Settings.  Any other posts currently marked as the homepost will be removed as the homepage.";
$lang['post_form_url_title_text']			= "URL Title";
$lang['post_form_url_title_help_text']		= "This is the 'slug' shown in the URL of your post. If you change this value, there must be NO spaces between words, instead, used dashes. <br>IE: new-url-title";
$lang['post_add_form_url_title_help_text']	= "This is the 'slug' shown in the URL of your post. If you enter this, there must be NO spaces between words, instead, used dashes. You can leave this blank and we'll build one for you based on the title of your post. <br>IE: new-url-title";

$lang['post_form_redirect_text']			= "Redirection";
$lang['post_form_redirect_help_text']		= "If you change the URL Title above we automatically set up an HTTP 301 (perminent) redirect for you so the old url_title points to the new post url_title. Here, you can override the default settings.";
$lang['post_form_redirect_none']			= "Do Not Redirect Old URL Title";
$lang['post_form_redirect_perm']			= "Perminently Redirect to new URL Title";
$lang['post_form_redirect_temp']			= "Temporarily Redirect to new URL Title";



// navigation
$lang['nav_hdr']							= "Navigation";
$lang['nav_new_hdr']						= "Create Navigation item";
$lang['nav_right_side_hdr']					= "Navigation Link";
$lang['nav_right_side_desc']				= "Below you can link to a specific page or post. Leave all options blank to point to your homepage.";
$lang['index_add_new_nav']					= "Add Navigation Item";
$lang['tab_all_nav_items']					= "All Navigation Items";
$lang['tab_nav_redirects']					= "Redirects";
$lang['nav_hdr']							= "Navigation";
$lang['index_nav_desc']						= "Drag and Drop items to reorder the links shown on the front navigation of your site.";
$lang['index_redirect_desc']				= "The table below shows any redirects for posts &amp; pages on your site. It also includes the type (page or post) and the type of redirect (301 - Perminant or 302 - Temporary). <b>Editing and Removing Redirects should be performed by experienced users</b>.";
$lang['nav_no_redirects_found']				= "No Redirects Found";
$lang['redir_edit_btn']						= "Edit Redirect";
$lang['redir_remove_btn']					= "Remove Redirect";
$lang['nav_edit_btn']						= "Edit";
$lang['nav_remove_btn']						= "Remove";
$lang['nav_edit_hdr']						= "Edit Navigation Item";
$lang['nav_save_btn']						= "Save Navigation item";
$lang['nav_form_title_text']				= "Title";
$lang['nav_form_title_help_text']			= "This is the text shown in the navigation bar that visitors see and click.";
$lang['nav_form_desc_text']					= "Description";
$lang['nav_form_desc_help_text']			= "This is the description of this link and it used for the title field. Visitors see this when hovering the mouse over the link text.";
$lang['nav_form_url_text']					= "URI";
$lang['nav_form_url_help_text']				= "This is the URI portion of your link. We automatically add your site's URL for you when generating links.";
$lang['nav_form_url_text_example']			= "about   <-- example usage";
$lang['nav_form_redirect_text']				= "Redirection";
$lang['nav_form_redirect_help_text']		= "If you changed the 'Choose A Page' or 'Choose A Post' field we automatically set up an HTTP 301 (perminent) redirect for you so the old URI points to the new page URI. Here, you can override the default settings.";
$lang['nav_form_redirect_text']				= "Redirection";
$lang['nav_form_type_text']					= "Type";
$lang['nav_form_type_help_text']			= "If you changed the 'Choose A Page' or 'Choose A Post', please choose if this navigation item points to a page or a post. We need this to correctly point the redirection.";
$lang['nav_form_type_page']					= "This is a Page";
$lang['nav_form_type_post']					= "This is a Blog Post";
$lang['nav_update_success_resp']			= "Updated Navigation Item Successfully";
$lang['nav_update_fail_resp']				= "Unable to update navigation item. Please try again.";
$lang['nav_form_choose_page']				= "Choose A Page";
$lang['nav_form_choose_page_help_text']		= "Choose from existing pages.";
$lang['nav_form_choose_post']				= "Choose A Blog Post";
$lang['nav_form_choose_post_help_text']		= "Choose from existing blog posts.";
$lang['pages_index_controller_label']		= "Page Marked As Homepage";

// redirection
$lang['nav_redir_edit_hdr']					= "Editing Redirection";
$lang['nav_redir_edit_subheading']			= "<b><em>Important</em></b>:  Only experienced users should edit or remove redirection items.  Changing these can have a negative impact on SEO and the number of 404 errors reported to visitors.  Use this function with great care.";

$lang['nav_redirect_removed_success_resp']	= "Removed Redirection Successfully";
$lang['nav_redirect_removed_fail_resp']		= "Unable to remove Redirection item. Please try again.";
$lang['nav_redirect_edit_success_resp']		= "Updated Redirection Successfully";
$lang['nav_redirect_edit_fail_resp']		= "Unable to update Redirection item. Please try again.";
$lang['nav_redir_form_old_slug_text']		= "From";
$lang['nav_redir_form_old_slug_desc']		= "The From field is the old URI segment, the one that will be initially called.";
$lang['nav_redir_form_new_slug_text']		= "To";
$lang['nav_redir_form_new_slug_desc']		= "The To field is the new URI segment, the one the visitor will be redirected to.";
$lang['nav_redir_form_type_text']			= "Type";
$lang['nav_redir_form_type_desc']			= "Whether this is a Page or a Post";
$lang['nav_redir_form_code_text']			= "HTTP Redirect Type";
$lang['nav_redir_form_code_desc']			= "Should this redirect be Perminent (301) or Temporary (302)?";



$lang['save_settings']						= "Save Settings";

//$lang['']		= "";

// form action responses
$lang['settings_update_success']						= "Settings Updated Successfully";
$lang['settings_update_failed']						= "Settings Failed to Update.  Please try again.";



// installer directory warning
$lang['installer_dir_warning_notice']		= "The /installer/ directory is still present.  For better security you should delete the installer/ directory and it's contents immediately!";


