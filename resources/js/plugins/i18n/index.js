import { createI18n } from "vue-i18n";
import en from '../../locales/en'
import ar from '../../locales/ar'

(JSON.parse(localStorage.getItem('isRtl')))?document.body.dir = 'rtl':document.body.dir = 'ltr'
export default new createI18n({
    legacy: false, // Vuetify does not support the legacy mode of vue-i18n
    globalInjection: true,
    locale: localStorage.getItem('appLang') || 'en',
    fallbackLocale: "en",
    availableLocales: ['en', 'ar'],
    messages: { en, ar },
});