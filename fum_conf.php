<?php
/**
 * @author  Christoph Bessei
 * @version 0.01
 */

class Fum_Conf {

	const FUM_NAME_PREFIX = 'fum_';

	/** @var array $fum_wordpress_fields
	 * Fields of a user which wordpress defines, does not contain the user_pass/user_password field,
	 * because there we have only the hash, not the password
	 */
	public static $fum_wordpress_fields = [
		'ID',
		'user_login',
		'user_nicename',
		'user_url',
		'user_email',
		'display_name',
		'nickname',
		'first_name',
		'last_name',
		'nickname',
		'description',
		'rich_editing',
		'comment_shortcuts',
		'admin_color',
		'use_ssl',
		'show_admin_bar_front',
	];

	public static $fum_register_login_page_name = 'fum_register_login';
	public static $fum_edit_page_name = 'fum_edit';

	/*Unique name of the default forms*/
	public static $fum_login_form_unique_name = 'fum_login_form';
	public static $fum_register_form_unique_name = 'fum_register_form';
	public static $fum_lost_password_form_unique_name = 'fum_lostpassword_form';
	public static $fum_edit_form_unique_name = 'fum_edit_form';
	public static $fum_change_password_form_unique_name = 'fum_change_password_form';
	public static $fum_event_register_form_unique_name = 'fum_event_register_form';

	/*Fields which are used by wordpress*/
	public static $fum_input_field_username = 'user_login';
	//Datebase uses user_pass, wp_signon expects user_password
	public static $fum_input_field_password = 'user_password';
	public static $fum_input_field_email = 'user_email';
	public static $fum_input_field_last_name = 'last_name';
	public static $fum_input_field_first_name = 'first_name';
	public static $fum_input_field_website = 'user_url';
	public static $fum_input_field_display_name = 'display_name';
	public static $fum_input_field_new_password = 'pass1';
	public static $fum_input_field_new_password_check = 'pass2';
	public static $fum_input_field_submit = 'fum_submit';

	/*DHV-Jugend input field names*/
	public static $fum_input_field_birthday = 'fum_birthday';
	public static $fum_input_field_street = 'fum_street';
	public static $fum_input_field_city = 'fum_city';
	public static $fum_input_field_postcode = 'fum_postcode';
	public static $fum_input_field_state = 'fum_state';
	public static $fum_input_field_phone_number = 'fum_phone_number';
	public static $fum_input_field_mobile_number = 'fum_mobile_number';
	public static $fum_input_field_dhv_member_number = 'fum_dhv_member_number';
	public static $fum_input_field_license_number = 'fum_license_number';
	public static $fum_input_field_aircraft = 'fum_aircraft';

	public static $fum_input_field_emergency_contact_surname = 'fum_emergency_contact_surname';
	public static $fum_input_field_emergency_contact_forename = 'fum__emergency_contact_forename';
	public static $fum_input_field_emergency_phone_number = 'fum_emergency_phone_number';


	//Name of the hidden unique_name field in the html form
	public static $fum_unique_name_field_name = 'fum_unique_name';


	public static $fum_post_type = 'fum_post';
	public static $fum_post_type_label = 'fum_posts';

	public static $fum_general_option_group = 'general_settings_group';
	public static $fum_general_option_group_hide_wp_login_php = 'hide_wp_login_php';
	public static $fum_general_option_group_hide_dashboard_from_non_admin = 'hide_dashboard_from_non_admin';

	public static $fum_login_form_option_group = 'fum_login_form_options';

	public static $fum_register_form_option_group = 'fum_register_form_options';
	public static $fum_register_form_generate_password_option = 'fum_register_form_generate_password_option';
	public static $fum_register_form_use_activation_mail_option = 'fum_register_form_use_activation_mail_option';


}