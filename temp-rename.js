const fs = require('fs');

 const moveFrom = './src/assets/tattoo';
const pathTo = './src/assets/tattoo';

fs.readdir(moveFrom, (err, files) => {
  if (err) return;
  files.forEach( file => {
    fs.rename( `${pathTo}/${file}`, pathTo + '/' + file.replace(' ', '-') );
  });

});  



// "[^"]+c":\"[a-z][A-Z]|(\+)
// \"[a-z][A-Z]|

// "[^"]+c":".*


// const fileToRead = './src/data/barrios.json';
// fs.readFile(fileToRead, 'utf8', (err, data) => {
//   if (err) return;

//   const regex = /"[^"]+c":".*/g;



  
//   let result = data.match(regex);
//   // console.log(result);
//   const replaced = result.map( line => {
    
//     return line.split(' ').join('-');
//     fs.write
//   });
//   console.log(replaced);
// });