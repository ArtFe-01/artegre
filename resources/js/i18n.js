import i18n from 'i18next';
import Backend from 'i18next-http-backend';
import { initReactI18next } from 'react-i18next';

// If there is no current language already set, but we have a VITE_LANGUAGE valid setting, use VITE_LANGUAGE as current language
if ((!localStorage.getItem('i18nextLng') || 'undefined' === localStorage.getItem('i18nextLng')) && import.meta.env.VITE_LANGUAGE) {
    localStorage.setItem('i18nextLng', import.meta.env.VITE_LANGUAGE);
}

i18n
    // load translation using http -> see /public/locales
    // learn more: https://github.com/i18next/i18next-http-backend
    .use(Backend)
    // pass the i18n instance to react-i18next.
    .use(initReactI18next)
    // init i18next
    // for all options read: https://www.i18next.com/overview/configuration-options
    .init({
        backend: { loadPath: 'trans/{{lng}}' },
        lng: localStorage.getItem('i18nextLng') || import.meta.env.VITE_LANGUAGE,
        fallbackLng: import.meta.env.VITE_FALLBACK_LANGUAGE,
        debug: import.meta.env.VITE_APP_DEBUG || false,
        // react: { useSuspense: false },

        interpolation: {
            escapeValue: false, // not needed for react as it escapes by default
        },
    });

export default i18n;
