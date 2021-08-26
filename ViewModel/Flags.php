<?php
/*
 * Copyright © Ghost Unicorns snc. All rights reserved.
 * See LICENSE for license details.
 */

declare(strict_types=1);

namespace GhostUnicorns\StoreFlagsUi\ViewModel;

use Magento\Framework\Locale\Resolver;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Flags implements ArgumentInterface
{
    /**
     * @var string[]
     */
    private array $langCodes = [
        'af_ZA' => 'AF',
        'ar_DZ' => 'AR',
        'ar_EG' => 'AR',
        'ar_KW' => 'AR',
        'ar_MA' => 'AR',
        'ar_SA' => 'AR',
        'az_Latn_AZ' => 'AZ',
        'be_BY' => 'BE',
        'bg_BG' => 'BG',
        'bn_BD' => 'BN',
        'bs_Latn_BA' => 'BS',
        'ca_ES' => 'CA',
        'cs_CZ' => 'CS',
        'cy_GB' => 'CY',
        'da_DK' => 'DA',
        'de_AT' => 'DE',
        'de_CH' => 'DE',
        'de_DE' => 'DE',
        'de_LU' => 'DE',
        'el_GR' => 'EL',
        'en_AU' => 'GB',
        'en_CA' => 'GB',
        'en_GB' => 'GB',
        'en_NZ' => 'GB',
        'en_US' => 'GB',
        'es_AR' => 'ES',
        'es_CO' => 'ES',
        'es_PA' => 'ES',
        'gl_ES' => 'GL',
        'es_CR' => 'ES',
        'es_ES' => 'ES',
        'es_MX' => 'ES',
        'eu_ES' => 'EU',
        'es_PE' => 'ES',
        'et_EE' => 'ET',
        'fa_IR' => 'FA',
        'fi_FI' => 'FI',
        'fil_PH' => 'FI',
        'fr_BE' => 'FR',
        'fr_CA' => 'FR',
        'fr_CH' => 'FR',
        'fr_FR' => 'FR',
        'fr_LU' => 'FR',
        'gu_IN' => 'GU',
        'he_IL' => 'HE',
        'hi_IN' => 'HI',
        'hr_HR' => 'HR',
        'hu_HU' => 'HU',
        'id_ID' => 'ID',
        'is_IS' => 'IS',
        'it_CH' => 'IT',
        'it_IT' => 'IT',
        'ja_JP' => 'JA',
        'ka_GE' => 'KA',
        'km_KH' => 'KM',
        'ko_KR' => 'KO',
        'lo_LA' => 'LO',
        'lt_LT' => 'LT',
        'lv_LV' => 'LV',
        'mk_MK' => 'MK',
        'mn_Cyrl_MN' => 'MN',
        'ms_MY' => 'MS',
        'ms_Latn_MY' => 'MS',
        'nl_BE' => 'NL',
        'nl_NL' => 'NL',
        'nb_NO' => 'NB',
        'nn_NO' => 'NN',
        'pl_PL' => 'PL',
        'pt_BR' => 'PT',
        'pt_PT' => 'PT',
        'ro_RO' => 'RO',
        'ru_RU' => 'RU',
        'sk_SK' => 'SK',
        'sl_SI' => 'SL',
        'sq_AL' => 'SQ',
        'sr_Cyrl_RS' => 'SR',
        'sr_Latn_RS' => 'SR',
        'sv_SE' => 'SV',
        'sv_FI' => 'SV',
        'sw_KE' => 'SW',
        'th_TH' => 'TH',
        'tr_TR' => 'TR',
        'uk_UA' => 'UK',
        'vi_VN' => 'VI',
        'zh_Hans_CN' => 'ZH',
        'zh_Hant_HK' => 'ZH',
        'zh_Hant_TW' => 'ZH',
        'es_CL' => 'ES',
        'es_VE' => 'ES',
        'en_IE' => 'GB',
        'es_BO' => 'ES',
        'es_US' => 'ES'
    ];

    private Resolver $resolver;

    /**
     * @param Resolver $resolver
     */
    public function __construct(
        Resolver $resolver
    ) {
        $this->resolver = $resolver;
    }

    /**
     * @return string
     */
    public function getFlagCodeByCurrentStore(): string
    {
        $langCode = $this->resolver->getLocale();
        return $this->getFlagCodeByLangCode($langCode);
    }

    /**
     * @param $langCode
     * @return string
     */
    public function getFlagCodeByLangCode($langCode): string
    {
        if (array_key_exists($langCode, $this->langCodes)) {
            return $this->langCodes[$langCode];
        }
        return '';
    }
}
