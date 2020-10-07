# LaMetric My Data Dataset Provider

[![Version](https://img.shields.io/packagist/v/pixelbrackets/lametric-my-data-dataset-provider.svg?style=flat-square)](https://packagist.org/packages/pixelbrackets/lametric-my-data-dataset-provider/)
[![Build Status](https://img.shields.io/gitlab/pipeline/pixelbrackets/lametric-my-data-dataset-provider?style=flat-square)](https://gitlab.com/pixelbrackets/lametric-my-data-dataset-provider/pipelines)
[![Made With](https://img.shields.io/badge/made_with-php-blue?style=flat-square)](https://gitlab.com/pixelbrackets/lametric-my-data-dataset-provider#requirements)
[![License](https://img.shields.io/badge/license-gpl--2.0--or--later-blue.svg?style=flat-square)](https://spdx.org/licenses/GPL-2.0-or-later.html)
[![Contribution](https://img.shields.io/badge/contributions_welcome-%F0%9F%94%B0-brightgreen.svg?labelColor=brightgreen&style=flat-square)](https://gitlab.com/pixelbrackets/lametric-my-data-dataset-provider/-/blob/master/CONTRIBUTING.md)

Provide a dataset for the LaMetric
[My Data (DIY)](https://apps.lametric.com/apps/my_data__diy_/8942) app.

![Screenshot](./docs/screenshot.png)

## Vision

This project allows editing and serving a file used by the LaMetric app
[My Data (DIY)](https://apps.lametric.com/apps/my_data__diy_/8942).

- One change field only, no wizards or multistep forms
- Provide a file for PULL methods, don't support PUSH methods
- KISS

## Requirements

- PHP

## Installation

Packagist Entry https://packagist.org/packages/pixelbrackets/lametric-my-data-dataset-provider/

- Point your webserver to the `web` directory
- Add the complete URL to the data file `frames.json` to your »My Data (DIY)«
  app settings, for example `https://example.com/frames.json`

## Source

https://gitlab.com/pixelbrackets/lametric-my-data-dataset-provider/

Mirror https://github.com/pixelbrackets/lametric-my-data-dataset-provider/

## Usage

- Set the environment variable `BASEURL` to overwrite the domain in the homepage

## License

GNU General Public License version 2 or later

The GNU General Public License can be found at http://www.gnu.org/copyleft/gpl.html.

## Author

Dan Untenzu (<mail@pixelbrackets.de> / [@pixelbrackets](https://pixelbrackets.de))

## Changelog

See [./CHANGELOG.md](CHANGELOG.md)

## Contribution

This script is Open Source, so please use, patch, extend or fork it.

[Contributions](CONTRIBUTING.md) are welcome!
