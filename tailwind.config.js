/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**.{php,html,js}","./template-parts/*.{php,html,js}","./blocks/*/**.{php,html,js}"],
  theme: {
    extend: {
      fontFamily: {
        'SF Pro Display': ['SF Pro Display', 'sans-serif'],
      },

      colors: {
        'primary': '#009779;',
        'background': '#0F0F0F',
   
      },
      height: {
   

      },
      fontSize: {
     
      },
      maxWidth:{
       
      }
    },
  },
  plugins: []
};
