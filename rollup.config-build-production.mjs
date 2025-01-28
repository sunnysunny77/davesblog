import { babel } from "@rollup/plugin-babel";
import commonjs from "@rollup/plugin-commonjs";
import terser from "@rollup/plugin-terser";
import { nodeResolve } from "@rollup/plugin-node-resolve";
//alert"
//button"
//carousel"
//collapse"
//dropdown"
//modal"
//offcanvas"
//popover"
//scrollspy"
//tab"
//toast"
//tooltip"
export default {
  input: "./js/index.js",
  output: [
    {
      file: "./site/js/app.min.js",
      format:  "iife",
      plugins: [terser()]
    }
  ],
  plugins: [
    commonjs({
      include: /node_modules/,
      "bootstrap": [],
    }),
    nodeResolve(),
    babel({ babelHelpers: "bundled" })
  ]
};