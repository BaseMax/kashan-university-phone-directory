# University of Kashan Phone Directory Scraper

This repository contains a scraper and dataset for extracting and publishing the phone directory of employees and personnel from the University of Kashan. It includes tools to scrape, parse, and export data from an HTML file into JSON format.

## Features

- HTML parsing to extract structured data.
- Export of extracted data in JSON format.
- Modular and adaptable code for similar scraping tasks.

## Project Structure

```
organization-phone-118
.
├── demo.html # Sample HTML data file.
├── extract.php # Script for extracting data from HTML.
├── output.json # Extracted data in JSON format.
└── load.php # Configuration and utility script.
```

## Prerequisites

- **PHP**: Version 7.4 or higher.
- **Web Server**: Optional, such as Apache or Nginx.

## Usage

1. Clone the repository:
   ```bash
   git clone https://github.com/BaseMax/kashan-university-phone-directory.git
   cd kashan-university-phone-directory
   ```

Place the HTML file to be parsed in the root directory and name it demo.html.

Run the extraction script:

```bash
php extract.php
```

View the output in `output.json`:

```bash
cat output.json
```

### Output Format

The extracted data is stored in a JSON file with a structure similar to this:

```json
[
    ["Name", "Position", "Phone Number"],
    ["Example User", "Lecturer", "123456789"]
]
```

### Contribution

Contributions are welcome! Please submit issues or pull requests on the GitHub repository.

### License

This project is licensed under the MIT License.

### Disclaimer

Ensure compliance with local laws and regulations regarding the publication of personal data. Obtain permission if necessary before sharing extracted information.

### Copyright

Data source: 118 Kashan University Directory. https://118.kashanu.ac.ir/

### Author

Developed by BaseMax.

Copyright 2024-2025, Max Base
