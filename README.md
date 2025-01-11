# wpDiscuz Non-Popup Spoiler Button

This repository contains code for a custom **non-popup spoiler button** for the wpDiscuz comment editor. It allows users to insert spoiler tags directly into the comment box without using a popup.

<a href="https://www.buymeacoffee.com/linuxtechmore"><img src="https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=&slug=linuxtechmore&button_colour=FFDD00&font_colour=000000&font_family=Cookie&outline_colour=000000&coffee_colour=ffffff" /></a>

## Features
- Adds a spoiler button to the wpDiscuz editor toolbar.
- Supports both selected text and default spoiler placeholders.
- No additional popup is required—spoilers are inserted inline.
- Customizable appearance and behavior.

## Installation & Customization
1. **JavaScript**: Download the `ltm_wpdiscuz_spoiler.js` file and upload it to your WordPress theme or child theme directory.
2. **PHP**: Add the provided code from `functions.php` to your theme's `functions.php` file.
3. **CSS**:

   - Option 1: Upload the provided `ltm_wpdiscuz_spoiler.css` file to your theme and enqueue it using the code in `functions.php`.
   - Option 2: Alternatively, paste the content of the `ltm_wpdiscuz_spoiler.css` file into the **Custom CSS** box in **wpDiscuz Settings → Style & Colors**.

> **Note:** The CSS file is designed for a dark theme. You can modify it to suit your design.

## Files
- **`ltm_wpdiscuz_spoiler.js`**: JavaScript file for spoiler button behavior.
- **`functions.php`**: PHP code to integrate the spoiler button with wpDiscuz.
- **`ltm_wpdiscuz_spoiler.css`**: Optional CSS for styling the spoiler button and its content (designed for dark themes).

## Usage
Once installed:
1. A spoiler button will appear in the wpDiscuz editor toolbar.
2. Clicking the button will:
   - Wrap selected text with `[spoiler][/spoiler]` tags.
   - Insert a default spoiler placeholder (`[spoiler]Your spoiler content here[/spoiler]`) if no text is selected.

## Contributions
Pull requests and issues are welcome. Suggestions for improving the functionality or styling are greatly appreciated.

## License
This project is licensed under the [GNU General Public License v3.0](https://www.gnu.org/licenses/gpl-3.0.html).

## Credits
Created by [Djalel Oukid](https://github.com/sniper1720).
