# laravel-tabler-ui-files

You can use this files to configured your laravel project with tabler ui themes.

## Configuring

To configure tabler-ui themes, you can follow several steps below.

1. Run npm installation command to install current dependencied of laravel. If you already done this step in your project, just ignore it and continue to step 2.

   > npm install

2. After install current dependencies package, you need to install packages need for tabler ui themes.

   > npm install --save-dev tabler-ui bootstrap-sass font-awesome selectize jquery-mask-plugin sparkline

3. You can copy all the files needed for tabler ui themes. In this project, we provide image assets in `public` folder, raw js and scss files in `resources` folder and `webpack.mix.js` to prepare laravel-mix. For some reason, you dont need to copy all files, just use the files you need.

4. Before generate files, you need to open file on node_modules/tabler_ui/src/assets/scss/bundle.scss. You need to change:

```
@import '../../../node_modules/bootstrap/scss/bootstrap.scss';
```

to

```
@import '../../../../bootstrap/scss/bootstrap.scss';
```

5. Lastly, you can compile files to generate css and js file.

   > npm run dev

   or

   > npm run prod

For preview all available tabler ui themes, you can use files on `views` folder and use route on `web.php`.
