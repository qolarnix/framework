import { nodeResolve } from '@rollup/plugin-node-resolve';

import terser from '@rollup/plugin-terser';
import livereload from 'rollup-plugin-livereload';
import postcss from 'rollup-plugin-postcss';

export default {
  input: 'assets/script.js',
  output: [
    {
      dir: '.framework/build',
      format: 'es',
      plugins: [
        terser()
      ]
    },
    {
      dir: '.framework/build-static',
      format: 'es',
      plugins: [
        terser()
      ]
    }
  ],
  plugins: [
    nodeResolve(),
    postcss(),
    livereload({
      watch: [
        '.framework/**/*.js',
      ],
      verbose: false,
      port: 3000
    }),
  ]
}