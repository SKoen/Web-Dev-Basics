<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/content/styles.css" />
    <link rel="stylesheet" href="/content/bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="/content/bootstrap/bootstrap.min.css" />
    <script src="/content/js/js.js"></script>
    <meta charset="utf-8">
    <title>
        <?php if (isset($this->title)) echo htmlspecialchars($this->title) ?>
    </title>
</head>

<body>
<nav class="navbar navbar-default col-md-12">
    <div class="navbar-header">
        <a href="/"><img class="img navbar-brand" src="/content/images/the-forum-logo.png"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/questions">Questions</a></li>
        </ul>
        <?php if(!($this->isLoggedIn)): ?>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/accounts/login">Login</a></li>
            <li><a href="/accounts/register">Register</a></li>
        </ul>
        <?php endif; ?>

        <?php if($this->isLoggedIn): ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/accounts/edit">My Profile</a></li>
                <li><a >Welcome, <?php echo $_SESSION['username'] ?></a></li>
                <li><a href="/accounts/logout">Logout</a></li>
            </ul>
        <?php endif; ?>

    </div>

</nav>
<row>
    <div class="col-md-1"></div>
    <div class="col-md-10">
