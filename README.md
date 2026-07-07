# VkSmartService WordPress Theme

Кастомная WordPress-тема для лендинга VK Smart Service. Архитектура повторяет подход `Simple-Way`: WordPress-native server layer и FSD-подобное разделение шаблонов, компонентов, секций, SCSS и JS.

## Структура

- `inc/` - setup, enqueue, helpers, Contact Form 7, ACF options.
- `template-parts/components/` - PascalCase UI-компоненты.
- `template-parts/sections/main/` - PascalCase секции главной страницы.
- `template-parts/layouts/` - Header/Footer.
- `assets/scss/` - SCSS исходники.
- `assets/css/main.css` - скомпилированный CSS.
- `assets/js/main.js` - легкое поведение страницы.

## Запуск

```bash
npm install
npm run build
docker compose up -d
```

WordPress будет доступен на `http://localhost:8080`, phpMyAdmin - на `http://localhost:8081`.

## Плагины

Установить и активировать:

- Advanced Custom Fields
- Contact Form 7

В ACF options можно задать контакты, тексты секций, shortcode CF7 и iframe Яндекс.Карты. Если поля не заполнены, тема использует fallback-контент из макета.

## Contact Form 7

Минимальная форма:

```text
[text* your-name placeholder "Ваше имя"]
[tel* your-phone placeholder "Номер телефона"]
[acceptance privacy default:on] Ознакомился(лась) с политикой конфиденциальности и даю согласие на обработку моих персональных данных. [/acceptance]
[submit "Перезвоните мне"]
```

Shortcode формы вставить в ACF поле `contactFormShortcode`.

## Карта

Карта вставляется перед footer через ACF поле `mapEmbedCode`. Ожидается iframe из конструктора Яндекс.Карт.
