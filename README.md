# Link JetEngine Query Builder - Elementor Loop

This WordPress plugin connects queries created with JetEngine Query Builder to Elementor loops, providing greater flexibility in creating your dynamic templates.

## Description

This plugin acts as a bridge between JetEngine Query Builder and Elementor loops, allowing you to use your custom JetEngine queries directly in Elementor loops. This gives you the ability to:

- Use complex JetEngine queries in Elementor loops
- Leverage the power of JetEngine Query Builder with the ease of use of Elementor loops
- Create custom dynamic displays

## Prerequisites

- WordPress 5.0 or higher
- Elementor Pro (with loops feature)
- JetEngine (with Query Builder)

## Installation

1. Download the plugin zip file
2. In your WordPress admin, go to "Plugins > Add New"
3. Click "Upload Plugin"
4. Select the downloaded zip file
5. Click "Install Now"
6. Once installation is complete, activate the plugin

## Usage

1. Create your custom query in JetEngine Query Builder
   - Set up your query parameters as needed
   - In the Query Builder settings, specify a Custom Query ID (e.g., "my_custom_query")

2. Add an Elementor loop component to your page
   - You can use Loop Grid, Loop Carousel, or any other loop widget
   - Drop the widget where you want to display your query results

3. In the loop component's Query settings:
   - Locate the "Query ID" field in the component settings
   - Enter the same Custom Query ID that you specified in JetEngine Query Builder (e.g., "my_custom_query")
   - The loop will now use your custom JetEngine query to fetch and display data

> **Helpful Tip**: When viewing your page on the front-end, you'll find a direct link to the JetEngine Query Builder in the WordPress admin bar. This makes it easy to quickly access and edit your queries while previewing the results.

## Support

If you encounter any issues or have questions, you can open an issue on GitHub.

## Contributing

Contributions are welcome! Feel free to:
1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This plugin is licensed under GPL v2 or later.
