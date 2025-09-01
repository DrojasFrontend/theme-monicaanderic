const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

module.exports = [
	{
		entry: {
			main: ["./js/src/main.js", "./css/src/main.scss"],
		},
		output: {
			filename: "./js/build/[name].min.[fullhash].js",
			path: path.resolve(__dirname),
		},
		// Configuración mejorada para mostrar errores
		mode: process.env.NODE_ENV || 'development',
		devtool: process.env.NODE_ENV === 'production' ? 'source-map' : 'eval-source-map',
		stats: {
			colors: true,
			hash: false,
			version: false,
			timings: true,
			assets: true,
			chunks: false,
			modules: false,
			reasons: false,
			children: false,
			source: false,
			errors: true,
			errorDetails: true,
			warnings: true,
			publicPath: false,
		},
		devServer: {
			static: path.resolve(__dirname),
			port: 8080,
			hot: true,
			// Configuración mejorada para errores
			client: {
				logging: 'info',
				overlay: {
					errors: true,
					warnings: false,
				},
				progress: true,
			},
			watchFiles: {
				paths: [
					"./template-*.php",
					"./template-parts/**/*.php",
					"./template-parts/componentes/**/*.php", // Específicamente componentes
					"./template-parts/secciones/**/*.php", // Específicamente secciones
					"./template-parts/layout/**/*.php", // Específicamente layout
					"./css/src/**/*.scss",
					"./js/src/**/*.js",
					"./*.php",
					"./**/*.php",
				],
				options: {
					usePolling: false,
					ignored: ["**/node_modules/**", "**/vendor/**", "**/.*/"],
				},
			},
			devMiddleware: {
				writeToDisk: true,
				stats: 'errors-warnings',
			},
		},
		resolve: {
			alias: {
				"~": path.resolve(__dirname, "node_modules"),
			},
		},
		module: {
			rules: [
				{
					test: /\.(js|jsx)$/,
					exclude: /node_modules/,
					loader: "babel-loader",
				},
				{
					test: /\.(sass|scss)$/,
					use: [
						MiniCssExtractPlugin.loader,
						{
							loader: "css-loader",
							options: {
								importLoaders: 2,
								sourceMap: true,
							},
						},
						{
							loader: "postcss-loader",
							options: {
								sourceMap: true,
								postcssOptions: {
									plugins: [require("autoprefixer")],
								},
							},
						},
						{
							loader: "sass-loader",
							options: {
								sourceMap: true,
								sassOptions: {
									includePaths: [path.resolve(__dirname, "node_modules")],
									outputStyle: process.env.NODE_ENV === 'production' ? 'compressed' : 'expanded',
								},
								additionalData: `$env: ${process.env.NODE_ENV};`,
							},
						},
					],
				},
				{
					test: /\.css$/,
					use: [
						MiniCssExtractPlugin.loader,
						{
							loader: "css-loader",
							options: {
								sourceMap: true,
							},
						},
					],
				},
				// Resto de tus loaders...
			],
		},
		plugins: [
			new CleanWebpackPlugin({
				cleanOnceBeforeBuildPatterns: ["./js/build/*", "./css/build/*"],
			}),
			new MiniCssExtractPlugin({
				filename: "./css/build/main.min.[fullhash].css",
			}),
			new BrowserSyncPlugin({
				proxy: "http://monicaanderic.local/", // Ajusta esto a tu URL local de WordPress
				port: 3000,
				files: ["./**/*.php", "./css/src/**/*.scss", "./js/src/**/*.js"],
				injectChanges: true,
				notify: false,
			}),
		],
		optimization: {
			minimizer: [`...`, new CssMinimizerPlugin()],
		},
	},
];
