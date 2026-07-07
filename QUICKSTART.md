# Quickstart

1. Install frontend dependencies:

```bash
npm install
```

2. Build SCSS:

```bash
npm run build
```

3. Copy env example if you want to change ports:

```powershell
Copy-Item env.example .env
```

4. Start WordPress:

```bash
docker compose up -d
```

5. Open:

- WordPress: `http://localhost:8080`
- phpMyAdmin: `http://localhost:8081`

6. In WordPress admin:

- Activate the `VkSmartService` theme.
- Install and activate `Advanced Custom Fields`.
- Install and activate `Contact Form 7`.
- Create a CF7 form and paste its shortcode into `VkSmartService -> Contact Form 7 shortcode`.
- Paste a Yandex Maps constructor iframe into `VkSmartService -> Yandex map embed code`.
