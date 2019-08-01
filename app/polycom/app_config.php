<?php

	//application details
		$apps[$x]['name'] = "Polycom";
		$apps[$x]['uuid'] = "d4ab90f0-eeeb-454a-af1e-a6e970f31147";
		$apps[$x]['category'] = "Vendor";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "";
		$apps[$x]['description']['es-cl'] = "";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "";
		$apps[$x]['description']['pt-pt'] = "";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//default settings
		$y=0;
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "1752b247-873b-4d41-9846-b9df93efe8df";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_gmt_offset";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "3600 * GMT offset";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "098b2abd-3af3-4104-8fba-fabf9573f925";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_digitmap";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "[*]xxxx|[2-9]11|0T|011xxx.T|[0-1][2-9]xxxxxxxxx|[2-9]xxxxxxxxx|[1-9]xxT|**x.T";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
                $y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a6f7cd49-23a6-42c5-8e77-d1ebbd274884";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_digitmap_timeout";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "3|3|3|3|3|3|3|3";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "096ef50c-3ff4-4a1f-bc37-79876a7eb832";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_call_waiting";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Call Waiting 1=enabled 0=disable";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "ef6b4223-0361-4c69-ae02-98c1b6fb3ad6";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_calls_per_line_key";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "4";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Limit number of calls per line key.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "6f3d254d-8dde-438d-b2a5-eac75d1a7db5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_feature_key_sync";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Feature Key Sync 1=enabled 0=disable";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "51697088-2ecf-4c9c-95d5-429c972606c2";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_nat_ip";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = " ";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c927e677-61c8-45c6-b827-8d3811584090";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_bluetooth_radio_on";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Bluetooth Radio 1=enabled 0=disable";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "deca02ea-2a9a-4741-90bd-ad4c1aa1bcbe";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_default_transfer_method";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "Consultative";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = " Transfer method: Blind, Consultative";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "b327130c-3e82-465a-9db2-f8f5cf801861";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_provision_url";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Provision URL";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3b52eaf2-4cf3-4c17-8802-34ef8e412e25";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_server_type";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "3";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "0=FTP, 1=TFTP, 2=HTTP,3=HTTPS, 4=FTPS, 5=Invalid";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "48ce4fef-e6bd-4be6-9c76-1590e8498408";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_provision_polling_enabled";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Re-provision phone on a regular interval 0=disabled, 1=enabled";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "86510e7b-5db4-4048-9260-137aa31bc728";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_power_saving_enable";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Power saving 1=enabled 0=disable";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "cb6e9966-a365-498d-929f-234f69cd7e2d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_provision_polling_time";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "03:00";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Adjust the time for reprovisioning a Polycom on a regular interval. Default is 03:00";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "fc67522f-dd0b-499c-a18c-4fdd1513fc09";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_request_validation_request";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "INVITE";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Request Validation Request - INVITE, ACK , BYE, REGISTER, CANCEL, OPTIONS, INFO, MESSAGE, SUBSCRIBE, NOTIFY, REFER, PRACK, UPDATE";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "60ab694c-5335-44c4-aec1-499be63f0318";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_request_validation_method";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "source";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Request Validation Method source, digest";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "09084b0b-40e5-4983-a760-7e7d191ea134";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_offhook_line_view_enabled";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Line keys are visible when you try to transfer. 1=enabled 0=disabled";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "182a1328-e640-4fa8-b4e6-c2ec8bd613ee";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_firmware_url";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "https://server.yourdomain.com/app/polycom/resources/firmware/5.9.3/";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Polycom Firmware URL for automatic firmware updates.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "db41288d-c75a-4005-b103-76e795885375";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_log_upload_enabled";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Polycom log upload. 0=Disabled - 1=Enabled.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3e4a5e47-627b-44c6-9be6-7dc2e0de44f7";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_contact_list_readonly";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Polycom Contact List Read Only 0=Disabled - 1=Enabled.";
		$y++;
	        $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "0c3e2ebd-afed-4f61-99b6-52e4d7ec972e";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_video_enable";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Polycom Video Enabled (VVX 500-600) 0=Disabled - 1=Enabled.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "97b83f7a-3e91-4d95-8bfd-6566c302a73d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_video_audio_call_mode";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "audio";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Polycom Video/Audio Default Call Mode (VVX 500-600). video,audio";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "09d11205-5b8c-4916-ad64-5766f0a729a3";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_video_audio_toggle";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Polycom Video / Audio Toggle (VVX 500-600). 0=Disabled - 1=Enabled.";
		$y++;	
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "09dad6aa-69b0-46d4-9b5f-5930d0af631b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_headset_mode";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Polycom headset memory mode 0=Disabled - 1=Enabled ";
		$y++;
?>
