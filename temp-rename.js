const fs = require('fs');

/* const moveFrom = './src/assets/tattoo';
const pathTo = './src/assets/tattoo';

fs.readdir(moveFrom, (err, files) => {
  if (err) return;
  files.forEach( file => {
    fs.rename( `${pathTo}/${file}`, pathTo + '/' + file.replace(' ', '-') );
  });

});  */


const VerEx = require('verbal-expressions');

const fileToRead = './src/data/barrios.json';
fs.readFile(fileToRead, 'utf8', (err, data) => {
  console.log(data);
  if (err) return;
  let result = VerEx().word('"src":"').replace(" ", "-");
  // let result = data.replace(/"src"/g, '"replacement"');
  console.log(result);
});
