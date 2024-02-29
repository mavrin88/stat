INSERT INTO public.migrations (id, migration, batch) VALUES (1, '2013_04_09_062329_create_revisions_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (2, '2014_10_12_000000_create_users_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (3, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (4, '2018_01_01_000000_create_action_events_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (5, '2019_05_10_000000_add_fields_to_action_events_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (6, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (7, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (8, '2022_02_03_133040_create_articles_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (9, '2022_02_09_214532_nova_trix_tables', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (10, '2022_02_09_215416_create_tag_tables', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (11, '2022_05_13_140555_payment_fields', 2);
INSERT INTO public.migrations (id, migration, batch) VALUES (12, '2022_05_19_090825_register_params_field_to_users', 3);
INSERT INTO public.migrations (id, migration, batch) VALUES (13, '2022_05_19_184039_create_sources_table', 4);
INSERT INTO public.migrations (id, migration, batch) VALUES (14, '2022_05_20_054736_create_campaign_costs_table', 5);
INSERT INTO public.migrations (id, migration, batch) VALUES (15, '2022_05_23_115735_add_impressions_to_campaign_costs', 6);
INSERT INTO public.migrations (id, migration, batch) VALUES (16, '2022_05_23_135827_create_payment_logs_table', 7);
INSERT INTO public.migrations (id, migration, batch) VALUES (17, '2022_06_02_095827_create_costs_table', 8);
INSERT INTO public.migrations (id, migration, batch) VALUES (18, '2022_05_31_202355_create_offers_table', 9);
INSERT INTO public.migrations (id, migration, batch) VALUES (24, '2018_08_08_100000_create_telescope_entries_table', 10);
INSERT INTO public.migrations (id, migration, batch) VALUES (25, '2022_11_02_185333_add_card_number_to_users_table', 10);
INSERT INTO public.migrations (id, migration, batch) VALUES (26, '2022_11_02_210720_add_payment_system_to_payment_logs_table', 10);
INSERT INTO public.migrations (id, migration, batch) VALUES (27, '2022_11_05_141320_add_index_to_payment_logs_table', 10);
INSERT INTO public.migrations (id, migration, batch) VALUES (28, '2022_11_09_140048_add_is_clear_field_to_users_table', 11);
INSERT INTO public.migrations (id, migration, batch) VALUES (29, '2022_11_10_154123_change_transaction_id_type_paymnet_logs_table', 12);
INSERT INTO public.migrations (id, migration, batch) VALUES (30, '2022_11_10_165436_change_amount_field_to_payment_logs_table', 13);
INSERT INTO public.migrations (id, migration, batch) VALUES (31, '2022_11_23_064103_add_receipt_email_to_users_table', 14);
INSERT INTO public.migrations (id, migration, batch) VALUES (32, '2022_11_23_145851_set_deletable_fk_to_payment_logs_table', 15);
INSERT INTO public.migrations (id, migration, batch) VALUES (33, '2022_12_02_120531_create_partners_table', 16);
INSERT INTO public.migrations (id, migration, batch) VALUES (34, '2023_03_06_170855_change_reason_type_on_payment_logs_table', 17);
INSERT INTO public.migrations (id, migration, batch) VALUES (35, '2023_03_09_011854_create_acquiring_setups_table', 18);
INSERT INTO public.migrations (id, migration, batch) VALUES (36, '2023_03_09_013036_add_commission_fields_to_payment_logs_table', 19);
INSERT INTO public.migrations (id, migration, batch) VALUES (37, '2023_04_14_145136_add_user_fields_to_users_table', 20);
INSERT INTO public.migrations (id, migration, batch) VALUES (38, '2023_04_14_150101_create_auth_logs_table', 21);
INSERT INTO public.migrations (id, migration, batch) VALUES (39, '2023_04_17_175942_create_domains_table', 22);
INSERT INTO public.migrations (id, migration, batch) VALUES (40, '2023_04_22_155233_create_user_params_table', 23);
INSERT INTO public.migrations (id, migration, batch) VALUES (47, '2023_05_02_125741_create_tariffs_table', 24);
INSERT INTO public.migrations (id, migration, batch) VALUES (48, '2023_05_02_125820_create_message_templates_table', 24);
INSERT INTO public.migrations (id, migration, batch) VALUES (49, '2023_05_02_125825_create_messages_table', 24);
INSERT INTO public.migrations (id, migration, batch) VALUES (50, '2023_05_17_154342_add_fields_to_messages_table', 25);
INSERT INTO public.migrations (id, migration, batch) VALUES (51, '2023_07_06_024604_add_revshare_to_partners_table', 26);
INSERT INTO public.migrations (id, migration, batch) VALUES (52, '2023_07_11_023712_add_cost_to_messages', 27);
INSERT INTO public.migrations (id, migration, batch) VALUES (53, '2023_07_11_024104_add_unsubscribe_at_field_to_users_table', 27);
INSERT INTO public.migrations (id, migration, batch) VALUES (54, '2023_07_12_155546_add_cloaking_field_to_sources_table', 28);
INSERT INTO public.migrations (id, migration, batch) VALUES (55, '2023_07_17_191758_add_offer_id_to_sources_table', 29);
INSERT INTO public.migrations (id, migration, batch) VALUES (56, '2023_08_03_175947_create_permission_tables', 30);
INSERT INTO public.migrations (id, migration, batch) VALUES (57, '2023_08_04_130406_create_cpa_rates_table', 31);
INSERT INTO public.migrations (id, migration, batch) VALUES (58, '2023_08_07_214143_add_revenue_type_field_to_partners_table', 32);
INSERT INTO public.migrations (id, migration, batch) VALUES (59, '2023_08_31_114213_add_original_id_to_users_table', 33);
INSERT INTO public.migrations (id, migration, batch) VALUES (60, '2023_08_31_214828_add_card_number_to_payment_logs_table', 33);
INSERT INTO public.migrations (id, migration, batch) VALUES (61, '2023_09_01_030953_change_next_date_fields_to_users_table', 34);
INSERT INTO public.migrations (id, migration, batch) VALUES (62, '2023_09_08_173330_add_is_mobile_app_field_to_users_table', 35);
INSERT INTO public.migrations (id, migration, batch) VALUES (63, '2023_10_05_140948_create_settings_table', 36);
INSERT INTO public.migrations (id, migration, batch) VALUES (64, '2023_10_05_184231_add_low_fields_to_users_table', 36);
INSERT INTO public.migrations (id, migration, batch) VALUES (66, '2023_10_27_115341_create_payment_to_partners_table', 37);
INSERT INTO public.migrations (id, migration, batch) VALUES (67, '2023_11_18_172055_change_field_indexes_phone_and_offer_id_users_table', 38);
INSERT INTO public.migrations (id, migration, batch) VALUES (68, '2023_11_20_202309_add_backup_token_field_to_users_table', 39);
INSERT INTO public.migrations (id, migration, batch) VALUES (69, '2023_11_30_160836_change_registered_params_field_type_to_users', 40);
INSERT INTO public.migrations (id, migration, batch) VALUES (70, '2023_12_08_083239_add_unsubscribe_reason_field_to_users_table', 41);
INSERT INTO public.migrations (id, migration, batch) VALUES (71, '2023_12_22_113215_add_payment_type_field_to_payment_logs_table', 42);
INSERT INTO public.migrations (id, migration, batch) VALUES (72, '2024_01_12_082648_add_soft_delete_to_users_table', 43);
INSERT INTO public.migrations (id, migration, batch) VALUES (73, '2024_01_25_215526_create_change_logs_table', 44);
