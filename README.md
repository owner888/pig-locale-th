# pig-locale-th

Thai (ไทย) for [pig](https://pigagent.dev)'s web UI.

```bash
pig install git:github.com/owner888/pig-locale-th
```

Then in the web UI: **⋯ → Language**, pick **ไทย**. The strings are in [`th.json`](th.json),
a Telegram-style key-value file: a key the pack does not have shows in English, so a pig newer
than the pack still works. To fix a string, edit the JSON and send a pull request — or import
your copy from the same settings page without installing anything.

Keys follow pig's `packages/coding-agent/src/Web/assets/js/i18n.js`.

## License

MIT
