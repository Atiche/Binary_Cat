# VkSmartService WordPress Theme

Кастомная WordPress-тема для лендинга VK Smart Service. Архитектура повторяет подход `Simple-Way`: WordPress-native server layer и FSD-подобное разделение шаблонов, компонентов, секций, SCSS и JS.

## Структура

- `inc/` - setup, enqueue, helpers, optional Contact Form 7 integration.
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

Опционально установить и активировать:

- Contact Form 7

Контент лендинга хранится в шаблонах и helper-функциях темы. Плагин полей не требуется.

## Contact Form 7

Минимальная форма:

```text
[text* your-name placeholder "Ваше имя"]
[tel* your-phone placeholder "Номер телефона"]
[acceptance privacy default:on] Ознакомился(лась) с политикой конфиденциальности и даю согласие на обработку моих персональных данных. [/acceptance]
[submit "Перезвоните мне"]
```

По умолчанию тема показывает fallback-форму. Чтобы вывести форму Contact Form 7, задайте shortcode через константу `VK_SMART_SERVICE_CF7_SHORTCODE` или фильтр `vk_smart_service_cf7_shortcode`.

## Карта

Карта вставляется перед footer как статический iframe в `template-parts/sections/main/YandexMap.php`.
