"
" 
set expandtab
set tabstop=4
set shiftwidth=4

" tidy for xml -q makes it quiet
map <F3> :%! tidy -q -i -xml % <CR>
