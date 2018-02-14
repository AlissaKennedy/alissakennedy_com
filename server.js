const express = require('express')
const php = require('node-php')
const path = require('path')
const minimist = require('minimist')

const ARGS = minimist(process.argv.slice(2))
const PORT = ARGS.port || 8080
const PATH = ARGS.path || ARGS._[0] || process.cwd()

const app = express()

app.use('/', php.cgi(PATH))

app.listen(PORT)

console.log(`Server listening on port ${PORT}`)