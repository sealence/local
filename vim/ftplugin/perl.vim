"
" need to figure out how to alter comments for perl scripts
"
" tell me whats wrong ;)
map <F6> :!perlcritic -3 %<CR>
" tidy 
map <F7> :%!perltidy <CR>
" syntax check
map <F3> :!/usr/local/bin/perl5 -c % <CR>
" dump doc
map <F11> :!/usr/local/bin/perldoc % <CR>
" run the script
map <F8> :!/usr/local/bin/perl5 % <CR>
" debug the script
map <F9> :!/usr/local/bin/perl5 -d % <CR>

" change from man command 
" * nice to be able to figure out keywords from
" from modules also not do ext sed ;)
nmap K :!perldoc `echo <cWORD> \| sed -e 's/;//'` <CR>

"set tags=./tags,tags,~/.vim/mytags/FixInc,~/.vim/mytags/tbl_edit,~/.vim/mytags/perl,~/.vim/mytags/site_perl
set tags=./tags,tags,~/.vim/mytags/FixInc,~/.vim/mytags/PERL
"set tags=./tags,tags,~/.vim/mytags/FixInc

set dictionary=~/.vim/perl.list

imap <F2> <C-X><C-k>

" add : for perl modules
set iskeyword=@,48-57,_,192-255,:
