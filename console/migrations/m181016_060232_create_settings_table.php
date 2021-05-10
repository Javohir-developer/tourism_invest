<?php

use yii\db\Migration;

/**
 * Handles the creation of table 'settings'.
 */
class m181016_060232_create_settings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%settings}}', [
            '[[setting_id]]' => $this->primaryKey(),
            '[[title]]' => $this->string(255),
            '[[description]]' => $this->text(),
            '[[slug]]' => $this->string(255),
            '[[type]]' => $this->integer(11),
            '[[input]]' => $this->integer(11),
            '[[data]]' => $this->text(),
            '[[default]]' => $this->string(255),
            '[[sort]]' => $this->integer(255),
            '[[lang_hash]]' => $this->string(255),
            '[[lang]]' => $this->integer(255),
        ]);

        $this->batchInsert('settings', ['setting_id', 'title', 'description', 'slug', 'type', 'input', 'data', 'default', 'sort', 'lang_hash', 'lang'], [
            [1, 'Текст на футтере', '', 'text-on-the-footer', 3, 5, NULL, '', NULL, 'myM_fy9DWEJaMALrbtDTczbUC8sEssd5J72OUpswdZEbJSmEji', 1],
            [2, 'Текст на футтере', '', 'text-on-the-footer', 3, 5, NULL, '', NULL, 'myM_fy9DWEJaMALrbtDTczbUC8sEssd5J72OUpswdZEbJSmEji', 2],
            [3, 'Текст на футтере', '', 'text-on-the-footer', 3, 5, NULL, '', NULL, 'myM_fy9DWEJaMALrbtDTczbUC8sEssd5J72OUpswdZEbJSmEji', 3],
            [4, 'текст Шапку', '', 'text-head', 2, 5, NULL, '', NULL, 'sbb5_rnobY3yOa_hlDjqSz0miKKrmHICySfBgGdTC1Tq1AMFmx', 1],
            [5, 'текст Шапку', '', 'text-head', 2, 5, NULL, '', NULL, 'sbb5_rnobY3yOa_hlDjqSz0miKKrmHICySfBgGdTC1Tq1AMFmx', 2],
            [6, 'текст Шапку', '', 'text-head', 2, 5, NULL, '', NULL, 'sbb5_rnobY3yOa_hlDjqSz0miKKrmHICySfBgGdTC1Tq1AMFmx', 3],
            [7, 'Тел номер', '', 'phone-number', 1, 1, NULL, '', NULL, 'cjIIbYzVQhX1mv_00vYo-_Zc9hM7d95wDP-NYGo8rAoyxXQXFE', 1],
            [8, 'Тел номер', '', 'phone-number', 1, 1, NULL, '', NULL, 'cjIIbYzVQhX1mv_00vYo-_Zc9hM7d95wDP-NYGo8rAoyxXQXFE', 2],
            [9, 'Тел номер', '', 'phone-number', 1, 1, NULL, '', NULL, 'cjIIbYzVQhX1mv_00vYo-_Zc9hM7d95wDP-NYGo8rAoyxXQXFE', 3],
            [10, 'Тел номер 2', '', 'phone-number2', 1, 1, NULL, '', NULL, '3oHaLuGEzgYLqGWZcd2_9Nhd-VFPVD85hd8AYYoMjNskmXeFRx', 1],
            [11, 'Тел номер 2', '', 'phone-number2', 1, 1, NULL, '', NULL, '3oHaLuGEzgYLqGWZcd2_9Nhd-VFPVD85hd8AYYoMjNskmXeFRx', 2],
            [12, 'Тел номер 2', '', 'phone-number2', 1, 1, NULL, '', NULL, '3oHaLuGEzgYLqGWZcd2_9Nhd-VFPVD85hd8AYYoMjNskmXeFRx', 3],
            [13, 'Факс', '', 'fax', 1, 1, NULL, '', NULL, '3oHaLuGEzgYLqGWZcd2_9Nhd-VFPVD85hd8AYYoMjNskmXeFRx', 1],
            [14, 'Факс', '', 'fax', 1, 1, NULL, '', NULL, '3oHaLuGEzgYLqGWZcd2_9Nhd-VFPVD85hd8AYYoMjNskmXeFRx', 2],
            [15, 'Факс', '', 'fax', 1, 1, NULL, '', NULL, '3oHaLuGEzgYLqGWZcd2_9Nhd-VFPVD85hd8AYYoMjNskmXeFRx', 3],
            [16, 'Телеграм', '', 'telegram', 4, 1, NULL, '', NULL, '23Exh3-gyS6Ss2AqCslmKdzYodUmdrs3Y6T1JFk0cZhc4mImO8', 1],
            [17, 'Телеграм', '', 'telegram', 4, 1, NULL, '', NULL, '23Exh3-gyS6Ss2AqCslmKdzYodUmdrs3Y6T1JFk0cZhc4mImO8', 2],
            [18, 'Телеграм', '', 'telegram', 4, 1, NULL, '', NULL, '23Exh3-gyS6Ss2AqCslmKdzYodUmdrs3Y6T1JFk0cZhc4mImO8', 3],
            [19, 'Электронная почта', '', 'email', 1, 1, NULL, '', NULL, '9SChFap9a39-dsTLe6EaMqLt2di4owvDxisfwrsJ91julM9rgm', 1],
            [20, 'Электронная почта', '', 'email', 1, 1, NULL, '', NULL, '9SChFap9a39-dsTLe6EaMqLt2di4owvDxisfwrsJ91julM9rgm', 2],
            [21, 'Электронная почта', '', 'email', 1, 1, NULL, '', NULL, '9SChFap9a39-dsTLe6EaMqLt2di4owvDxisfwrsJ91julM9rgm', 3],
            [22, 'Адрес', '', 'adress', 1, 5, NULL, '', NULL, '8oQdhE1C2-wZpDVrKYiPH8aFQev1EwV7mnUgBj_VEXgkcQ_hrS', 1],
            [23, 'Адрес', '', 'adress', 1, 5, NULL, '', NULL, '8oQdhE1C2-wZpDVrKYiPH8aFQev1EwV7mnUgBj_VEXgkcQ_hrS', 2],
            [24, 'Адрес', '', 'adress', 1, 5, NULL, '', NULL, '8oQdhE1C2-wZpDVrKYiPH8aFQev1EwV7mnUgBj_VEXgkcQ_hrS', 3],
            [25, 'Карта', '', 'map', 1, 5, NULL, '', NULL, 'T_Jf7zhkjWgOaNHLM-VUBcRtBg9a1lqKSt3AsxFZLt7R9Ej48m', 1],
            [26, 'Карта', '', 'map', 1, 5, NULL, '', NULL, 'T_Jf7zhkjWgOaNHLM-VUBcRtBg9a1lqKSt3AsxFZLt7R9Ej48m', 2],
            [27, 'Карта', '', 'map', 1, 5, NULL, '', NULL, 'T_Jf7zhkjWgOaNHLM-VUBcRtBg9a1lqKSt3AsxFZLt7R9Ej48m', 3],
            [28, 'Keywords', '', 'keywords', 1, 1, NULL, '', NULL, 'A3zCJVsS9COz2_QPMYHVqLqLEZfBtGX8cWLgGg11_f-hzX3he3', 1],
            [29, 'Keywords', '', 'keywords', 1, 1, NULL, '', NULL, 'A3zCJVsS9COz2_QPMYHVqLqLEZfBtGX8cWLgGg11_f-hzX3he3', 2],
            [30, 'Keywords', '', 'keywords', 1, 1, NULL, '', NULL, 'A3zCJVsS9COz2_QPMYHVqLqLEZfBtGX8cWLgGg11_f-hzX3he3', 3],
            [31, 'og-image', '', 'og-image', 1, 1, NULL, '', NULL, 'u7-qaDluAR_8EW1yqaW_n1AM7OLeFeajYC4jA1_UA0okpPdQMf', 1],
            [32, 'og-image', '', 'og-image', 1, 1, NULL, '', NULL, 'u7-qaDluAR_8EW1yqaW_n1AM7OLeFeajYC4jA1_UA0okpPdQMf', 2],
            [33, 'og-image', '', 'og-image', 1, 1, NULL, '', NULL, 'u7-qaDluAR_8EW1yqaW_n1AM7OLeFeajYC4jA1_UA0okpPdQMf', 3],
            [34, 'og-title', '', 'og-title', 1, 1, NULL, '', NULL, 'qQ8iaa_8nP_XTPbUWYkUKzk7bPY10SlwgsOcifcVsI7Y2-aEwG', 1],
            [35, 'og-title', '', 'og-title', 1, 1, NULL, '', NULL, 'qQ8iaa_8nP_XTPbUWYkUKzk7bPY10SlwgsOcifcVsI7Y2-aEwG', 2],
            [36, 'og-title', '', 'og-title', 1, 1, NULL, '', NULL, 'qQ8iaa_8nP_XTPbUWYkUKzk7bPY10SlwgsOcifcVsI7Y2-aEwG', 3],
            [37, 'telegram-social', '', 'telegram-social', 4, 1, NULL, '', NULL, '0rK9p4TDfzLWCcm9O2nx_X_d0-UXiVUr81KUxHt4yoN6diHFJu', 1],
            [38, 'telegram-social', '', 'telegram-social', 4, 1, NULL, '', NULL, '0rK9p4TDfzLWCcm9O2nx_X_d0-UXiVUr81KUxHt4yoN6diHFJu', 2],
            [39, 'telegram-social', '', 'telegram-social', 4, 1, NULL, '', NULL, '0rK9p4TDfzLWCcm9O2nx_X_d0-UXiVUr81KUxHt4yoN6diHFJu', 3],
            [40, 'facebook-social', '', 'facebook-social', 4, 1, NULL, '', NULL, 'y90qlfNbNJIoRmgPLs-XJfJTJVks3IpKD_tbHxDZXwdj73ZQMx', 1],
            [41, 'facebook-social', '', 'facebook-social', 4, 1, NULL, '', NULL, 'y90qlfNbNJIoRmgPLs-XJfJTJVks3IpKD_tbHxDZXwdj73ZQMx', 2],
            [42, 'facebook-social', '', 'facebook-social', 4, 1, NULL, '', NULL, 'y90qlfNbNJIoRmgPLs-XJfJTJVks3IpKD_tbHxDZXwdj73ZQMx', 3],
            [43, 'twitter-social', '', 'twitter-social', 4, 1, NULL, '', NULL, 'EBc1pV5zy-woObDmthKkeQO2Htyl5EoM1B_bHYhJ3bdtewpav7', 1],
            [44, 'twitter-social', '', 'twitter-social', 4, 1, NULL, '', NULL, 'EBc1pV5zy-woObDmthKkeQO2Htyl5EoM1B_bHYhJ3bdtewpav7', 2],
            [45, 'twitter-social', '', 'twitter-social', 4, 1, NULL, '', NULL, 'EBc1pV5zy-woObDmthKkeQO2Htyl5EoM1B_bHYhJ3bdtewpav7', 3],
            [46, 'instagram', '', 'instagram', 4, 1, NULL, '', NULL, 'L43ADWSAbpDEKFt3uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 1],
            [47, 'instagram', '', 'instagram', 4, 1, NULL, '', NULL, 'L43ADWSAbpDEKFt3uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 2],
            [48, 'instagram', '', 'instagram', 4, 1, NULL, '', NULL, 'L43ADWSAbpDEKFt3uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 3],
            [49, 'Logo', '', 'logo', 2, 6, NULL, '', NULL, 'L43ADWSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 1],
            [50, 'Logo', '', 'logo', 2, 6, NULL, '', NULL, 'L43ADWSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 2],
            [51, 'Logo', '', 'logo', 2, 6, NULL, '', NULL, 'L43ADWSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 3],
            [52, 'Default Photo', '', 'default_photo', 1, 6, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 1],
            [53, 'Default Photo', '', 'default_photo', 1, 6, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 2],
            [54, 'Default Photo', '', 'default_photo', 1, 6, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 3],
            [55, 'google-plus', '', 'google-plus', 4, 1, NULL, '', NULL, 'EBC1pV5zy-woObDmthKkeQO2Htyl5EoM1B_bHYhJ3bdtewpav7', 1],
            [56, 'google-plus', '', 'google-plus', 4, 1, NULL, '', NULL, 'EBC1pV5zy-woObDmthKkeQO2Htyl5EoM1B_bHYhJ3bdtewpav7', 2],
            [57, 'google-plus', '', 'google-plus', 4, 1, NULL, '', NULL, 'EBC1pV5zy-woObDmthKkeQO2Htyl5EoM1B_bHYhJ3bdtewpav7', 3],
            [58, 'google-plus', '', '1google-plus', 8, 1, NULL, '', NULL, 'EBC1pV5zy-woObDmthKkeQO2Htyl5EoM1B_bHYhJ3bdtewpav7', 1],
            [59, 'google-plus', '', '1google-plus', 8, 1, NULL, '', NULL, 'EBC1pV5zy-woObDmthKkeQO2Htyl5EoM1B_bHYhJ3bdtewpav7', 2],
            [60, 'google-plus', '', '1google-plus', 8, 1, NULL, '', NULL, 'EBC1pV5zy-woObDmthKkeQO2Htyl5EoM1B_bHYhJ3bdtewpav7', 3],
            [61, 'Текст на футтере', '', '1text-on-the-footer', 7, 5, NULL, '', NULL, 'myM_fy9DWEJaMALrbtDTczbUC8sEssd5J72OUpswdZEbJSmEji', 1],
            [62, 'Текст на футтере', '', '1text-on-the-footer', 7, 5, NULL, '', NULL, 'myM_fy9DWEJaMALrbtDTczbUC8sEssd5J72OUpswdZEbJSmEji', 2],
            [63, 'Текст на футтере', '', '1text-on-the-footer', 7, 5, NULL, '', NULL, 'myM_fy9DWEJaMALrbtDTczbUC8sEssd5J72OUpswdZEbJSmEji', 3],
            [64, 'текст Шапку', '', '1text-head', 6, 5, NULL, '', NULL, 'sbb5_rnobY3yOa_hlDjqSz0miKKrmHICySfBgGdTC1Tq1AMFmx', 1],
            [65, 'текст Шапку', '', '1text-head', 6, 5, NULL, '', NULL, 'sbb5_rnobY3yOa_hlDjqSz0miKKrmHICySfBgGdTC1Tq1AMFmx', 2],
            [66, 'текст Шапку', '', '1text-head', 6, 5, NULL, '', NULL, 'sbb5_rnobY3yOa_hlDjqSz0miKKrmHICySfBgGdTC1Tq1AMFmx', 3],
            [67, 'Тел номер', '', '1phone-number', 5, 1, NULL, '', NULL, 'cjIIbYzVQhX1mv_00vYo-_Zc9hM7d95wDP-NYGo8rAoyxXQXFE', 1],
            [68, 'Тел номер', '', '1phone-number', 5, 1, NULL, '', NULL, 'cjIIbYzVQhX1mv_00vYo-_Zc9hM7d95wDP-NYGo8rAoyxXQXFE', 2],
            [69, 'Тел номер', '', '1phone-number', 5, 1, NULL, '', NULL, 'cjIIbYzVQhX1mv_00vYo-_Zc9hM7d95wDP-NYGo8rAoyxXQXFE', 3],
            [70, 'Тел номер 2', '', '1phone-number2', 5, 1, NULL, '', NULL, '3oHaLuGEzgYLqGWZcd2_9Nhd-VFPVD85hd8AYYoMjNskmXeFRx', 1],
            [71, 'Тел номер 2', '', '1phone-number2', 5, 1, NULL, '', NULL, '3oHaLuGEzgYLqGWZcd2_9Nhd-VFPVD85hd8AYYoMjNskmXeFRx', 2],
            [72, 'Тел номер 2', '', '1phone-number2', 5, 1, NULL, '', NULL, '3oHaLuGEzgYLqGWZcd2_9Nhd-VFPVD85hd8AYYoMjNskmXeFRx', 3],
            [73, 'Факс', '', '1fax', 5, 1, NULL, '', NULL, '3oHaLuGEzgYLqGWZcd2_9Nhd-VFPVD85hd8AYYoMjNskmXeFRx', 1],
            [74, 'Факс', '', '1fax', 5, 1, NULL, '', NULL, '3oHaLuGEzgYLqGWZcd2_9Nhd-VFPVD85hd8AYYoMjNskmXeFRx', 2],
            [75, 'Факс', '', '1fax', 5, 1, NULL, '', NULL, '3oHaLuGEzgYLqGWZcd2_9Nhd-VFPVD85hd8AYYoMjNskmXeFRx', 3],
            [76, 'Телеграм', '', '1telegram', 8, 1, NULL, '', NULL, '23Exh3-gyS6Ss2AqCslmKdzYodUmdrs3Y6T1JFk0cZhc4mImO8', 1],
            [77, 'Телеграм', '', '1telegram', 8, 1, NULL, '', NULL, '23Exh3-gyS6Ss2AqCslmKdzYodUmdrs3Y6T1JFk0cZhc4mImO8', 2],
            [78, 'Телеграм', '', '1telegram', 8, 1, NULL, '', NULL, '23Exh3-gyS6Ss2AqCslmKdzYodUmdrs3Y6T1JFk0cZhc4mImO8', 3],
            [79, 'Электронная почта', '', '1email', 5, 1, NULL, '', NULL, '9SChFap9a39-dsTLe6EaMqLt2di4owvDxisfwrsJ91julM9rgm', 1],
            [80, 'Электронная почта', '', '1email', 5, 1, NULL, '', NULL, '9SChFap9a39-dsTLe6EaMqLt2di4owvDxisfwrsJ91julM9rgm', 2],
            [81, 'Электронная почта', '', '1email', 5, 1, NULL, '', NULL, '9SChFap9a39-dsTLe6EaMqLt2di4owvDxisfwrsJ91julM9rgm', 3],
            [82, 'Адрес', '', '1adress', 5, 5, NULL, '', NULL, '8oQdhE1C2-wZpDVrKYiPH8aFQev1EwV7mnUgBj_VEXgkcQ_hrS', 1],
            [83, 'Адрес', '', '1adress', 5, 5, NULL, '', NULL, '8oQdhE1C2-wZpDVrKYiPH8aFQev1EwV7mnUgBj_VEXgkcQ_hrS', 2],
            [84, 'Адрес', '', '1adress', 5, 5, NULL, '', NULL, '8oQdhE1C2-wZpDVrKYiPH8aFQev1EwV7mnUgBj_VEXgkcQ_hrS', 3],
            [85, 'Карта', '', '1map', 5, 5, NULL, '', NULL, 'T_Jf7zhkjWgOaNHLM-VUBcRtBg9a1lqKSt3AsxFZLt7R9Ej48m', 1],
            [86, 'Карта', '', '1map', 5, 5, NULL, '', NULL, 'T_Jf7zhkjWgOaNHLM-VUBcRtBg9a1lqKSt3AsxFZLt7R9Ej48m', 2],
            [87, 'Карта', '', '1map', 5, 5, NULL, '', NULL, 'T_Jf7zhkjWgOaNHLM-VUBcRtBg9a1lqKSt3AsxFZLt7R9Ej48m', 3],
            [88, 'Keywords', '', '1keywords', 5, 1, NULL, '', NULL, 'A3zCJVsS9COz2_QPMYHVqLqLEZfBtGX8cWLgGg11_f-hzX3he3', 1],
            [89, 'Keywords', '', '1keywords', 5, 1, NULL, '', NULL, 'A3zCJVsS9COz2_QPMYHVqLqLEZfBtGX8cWLgGg11_f-hzX3he3', 2],
            [90, 'Keywords', '', '1keywords', 5, 1, NULL, '', NULL, 'A3zCJVsS9COz2_QPMYHVqLqLEZfBtGX8cWLgGg11_f-hzX3he3', 3],
            [91, 'og-image', '', '1og-image', 5, 1, NULL, '', NULL, 'u7-qaDluAR_8EW1yqaW_n1AM7OLeFeajYC4jA1_UA0okpPdQMf', 1],
            [92, 'og-image', '', '1og-image', 5, 1, NULL, '', NULL, 'u7-qaDluAR_8EW1yqaW_n1AM7OLeFeajYC4jA1_UA0okpPdQMf', 2],
            [93, 'og-image', '', '1og-image', 5, 1, NULL, '', NULL, 'u7-qaDluAR_8EW1yqaW_n1AM7OLeFeajYC4jA1_UA0okpPdQMf', 3],
            [94, 'og-title', '', '1og-title', 5, 1, NULL, '', NULL, 'qQ8iaa_8nP_XTPbUWYkUKzk7bPY10SlwgsOcifcVsI7Y2-aEwG', 1],
            [95, 'og-title', '', '1og-title', 5, 1, NULL, '', NULL, 'qQ8iaa_8nP_XTPbUWYkUKzk7bPY10SlwgsOcifcVsI7Y2-aEwG', 2],
            [96, 'og-title', '', '1og-title', 5, 1, NULL, '', NULL, 'qQ8iaa_8nP_XTPbUWYkUKzk7bPY10SlwgsOcifcVsI7Y2-aEwG', 3],
            [97, 'telegram-social', '', '1telegram-social', 8, 1, NULL, '', NULL, '0rK9p4TDfzLWCcm9O2nx_X_d0-UXiVUr81KUxHt4yoN6diHFJu', 1],
            [98, 'telegram-social', '', '1telegram-social', 8, 1, NULL, '', NULL, '0rK9p4TDfzLWCcm9O2nx_X_d0-UXiVUr81KUxHt4yoN6diHFJu', 2],
            [99, 'telegram-social', '', '1telegram-social', 8, 1, NULL, '', NULL, '0rK9p4TDfzLWCcm9O2nx_X_d0-UXiVUr81KUxHt4yoN6diHFJu', 3],
            [100, 'facebook-social', '', '1facebook-social', 8, 1, NULL, '', NULL, 'y90qlfNbNJIoRmgPLs-XJfJTJVks3IpKD_tbHxDZXwdj73ZQMx', 1],
            [101, 'facebook-social', '', '1facebook-social', 8, 1, NULL, '', NULL, 'y90qlfNbNJIoRmgPLs-XJfJTJVks3IpKD_tbHxDZXwdj73ZQMx', 2],
            [102, 'facebook-social', '', '1facebook-social', 8, 1, NULL, '', NULL, 'y90qlfNbNJIoRmgPLs-XJfJTJVks3IpKD_tbHxDZXwdj73ZQMx', 3],
            [103, 'twitter-social', '', '1twitter-social', 8, 1, NULL, '', NULL, 'EBc1pV5zy-woObDmthKkeQO2Htyl5EoM1B_bHYhJ3bdtewpav7', 1],
            [104, 'twitter-social', '', '1twitter-social', 8, 1, NULL, '', NULL, 'EBc1pV5zy-woObDmthKkeQO2Htyl5EoM1B_bHYhJ3bdtewpav7', 2],
            [105, 'twitter-social', '', '1twitter-social', 8, 1, NULL, '', NULL, 'EBc1pV5zy-woObDmthKkeQO2Htyl5EoM1B_bHYhJ3bdtewpav7', 3],
            [106, 'instagram', '', '1instagram', 8, 1, NULL, '', NULL, 'L43ADWSAbpDEKFt3uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 1],
            [107, 'instagram', '', '1instagram', 8, 1, NULL, '', NULL, 'L43ADWSAbpDEKFt3uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 2],
            [108, 'instagram', '', '1instagram', 8, 1, NULL, '', NULL, 'L43ADWSAbpDEKFt3uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 3],
            [109, 'Logo', '', '1logo', 6, 6, NULL, '', NULL, 'L43ADWSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 1],
            [110, 'Logo', '', '1logo', 6, 6, NULL, '', NULL, 'L43ADWSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 2],
            [111, 'Logo', '', '1logo', 6, 6, NULL, '', NULL, 'L43ADWSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 3],
            [112, 'Default Photo', '', '1default_photo', 5, 6, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 1],
            [113, 'Default Photo', '', '1default_photo', 5, 6, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 2],
            [114, 'Default Photo', '', '1default_photo', 5, 6, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZW', 3],
            [115, 'Gerb', '', 'gerb', 1, 1, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZw', 1],
            [116, 'Gerb', '', 'gerb', 1, 1, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZw', 2],
            [117, 'Gerb', '', 'gerb', 1, 1, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkZw', 3],
            [118, 'Gerb', '', '1gerb', 5, 1, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkzw', 1],
            [119, 'Gerb', '', '1gerb', 5, 1, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkzw', 2],
            [120, 'Gerb', '', '1gerb', 5, 1, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANMzLxDaA0udFAHlLLHknJOotkzw', 3],
            [121, 'Bayroq', '', 'bayroq', 1, 1, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANmzLxDaA0udFAHlLLHknJOotkZw', 1],
            [122, 'Bayroq', '', 'bayroq', 1, 1, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANmzLxDaA0udFAHlLLHknJOotkZw', 2],
            [123, 'Bayroq', '', 'bayroq', 1, 1, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzANmzLxDaA0udFAHlLLHknJOotkZw', 3],
            [124, 'Bayroq', '', '1bayroq', 5, 1, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzAnMzLxDaA0udFAHlLLHknJOotkzw', 1],
            [125, 'Bayroq', '', '1bayroq', 5, 1, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzAnMzLxDaA0udFAHlLLHknJOotkzw', 2],
            [126, 'Bayroq', '', '1bayroq', 5, 1, NULL, '', NULL, 'L43ADwSAbpDEKFt4uSaILzAnMzLxDaA0udFAHlLLHknJOotkzw', 3],
            [127, 'Madhiya', '', 'madhiya', 1, 1, NULL, '', NULL, 'l43ADwSAbpDEKFt4uSaILzANmzLxDaA0udFAHlLLHknJOotkZw', 1],
            [128, 'Madhiya', '', 'madhiya', 1, 1, NULL, '', NULL, 'l43ADwSAbpDEKFt4uSaILzANmzLxDaA0udFAHlLLHknJOotkZw', 2],
            [129, 'Madhiya', '', 'madhiya', 1, 1, NULL, '', NULL, 'l43ADwSAbpDEKFt4uSaILzANmzLxDaA0udFAHlLLHknJOotkZw', 3],
            [130, 'Madhiya', '', '1madhiya', 5, 1, NULL, '', NULL, 'L33ADwSAbpDEKFt4uSaILzAnMzLxDaA0udFAHlLLHknJOotkzw', 1],
            [131, 'Madhiya', '', '1madhiya', 5, 1, NULL, '', NULL, 'L33ADwSAbpDEKFt4uSaILzAnMzLxDaA0udFAHlLLHknJOotkzw', 2],
            [132, 'Madhiya', '', '1madhiya', 5, 1, NULL, '', NULL, 'L33ADwSAbpDEKFt4uSaILzAnMzLxDaA0udFAHlLLHknJOotkzw', 3],
        ]);

        /*
         * Создание индекса для создание отношение:
         * Языка - langs
         */
        $this->createIndex(
            'idx-settings-langs-lang',
            '{{%settings}}',
            '[[lang]]'
        );
        //Создание отношение
        $this->addForeignKey(
            'fk-settings-langs-lang',
            '{{%settings}}',
            '[[lang]]',
            '{{%langs}}',
            '[[lang_id]]',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-settings-langs-lang',
            '{{%settings}}'
        );

        $this->dropIndex(
            'idx-settings-langs-lang',
            '{{%settings}}'
        );

        $this->dropTable('{{%settings}}');
    }
}
