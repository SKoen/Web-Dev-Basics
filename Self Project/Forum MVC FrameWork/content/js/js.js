function showhideanswers(){
    if(document.getElementById('postanswer').style.display == 'none'){
        document.getElementById('postanswer').style.display = 'block';
        document.getElementById('showhidebutton').innerText = 'Hide';
    }
    else {
        document.getElementById('postanswer').style.display = 'none';
        document.getElementById('showhidebutton').innerText = 'Write Answer';
    }
}