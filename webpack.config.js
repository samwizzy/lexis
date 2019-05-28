const path = require("path");

module.exports = {
	mode: "development",
	watch: true,
	entry: {
		"bundle": "./src/index.js",
		"register": "./src/register.js",
		"login": "./src/login.js",
		"test": "./src/test.js"
	},
	output: {
		filename: "[name].js",
		path: path.resolve(__dirname, "dist"),
		publicPath: "/dist/"
	},
	devtool: "source-map",
	devServer: {
		contentBase: path.resolve(__dirname, ".") // this makes only only html files in the root directory reload live
		// contentBase: path.resolve(__dirname, "dist") // this makes only only html files in the dist directory reload live
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: {
					loader: "babel-loader",
					options: {
						presets: ["@babel/preset-env"]
					}
				}
			}
		]
	}
}