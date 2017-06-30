const electron = require('electron')
const {app, BrowserWindow} = electron

app.on('ready',()=>{
  let win = new BrowserWindow({width:960, hehight:540})
  win.loadURL(`file://${__dirname}/login.html`)
})
