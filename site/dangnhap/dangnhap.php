<style>
       main>div {
        display: grid;
        grid-template-columns: 3fr 4fr;
        width: 850px;
        height: 650px;
        box-shadow: 0 0 5px gray;
        border-radius: 10px;
        margin: 50px auto;
        overflow: hidden;
    }

    main>div>img {
        width: 100%;
        height: 100%;
    }
    main>div>div {
        
        height: 100%;
    }
    main>div>div>form {
        display: flex;
        flex-direction: column;
        padding: 30px;
        gap: 10px;
        color: #4E4E4E;
        font-size: 0.9em;
        height: 100%;
        position: relative;
    }
    main>div>div>form>h2, main>div>div>form>p {
        color: var(--lightblack);
    }
    main>div>div>form>p {
            margin-bottom: 30px;
        }
    main>div>div>form>label {
        margin-top: 10px;
        border-bottom: 1px solid var(--gray);
        padding: 0px 10px;
        cursor: pointer;
    }
    main>div>div>form>label>p {
        margin-left: 20px;
    }
    main>div>div>form>label>div {
        display: grid;
        grid-template-columns: 20px auto;
        height: 40px;
    }
    main>div>div>form>label>div>* {
        align-self: center;
    }

    main>div>div>form>label input {
        padding-left: 15px;
        width: 1fr;
        border: none;
        outline: none;
        background-color: transparent;
    }
    main>div>div>form>label input::placeholder {
        color: var(--gray);
    }
    main>div>div>form>.submit{
        padding: 10px;
        width: 200px;
        border-radius: 5px;
        background-color: #c34439;
        color: white;
        border: none;
        font-size: 1.3em;
        position: absolute;
        bottom: 100px;
        left: 50%;
        transform: translate(-50%, 0%);
        cursor: pointer;
    }

    main>div>div>form>a{
        position: absolute;
        right: 30px;
        bottom: 30px;
    }
    main .inline-content>* {
        display: inline;
        vertical-align: middle;
        font-size: 20px;
        font-weight: 600;
    }
    .input-message {
        height: 20px;
        color: var(--red);
    }
</style>
<main>
    <div>
        <img src="<?=$IMAGE_DIR?>/login-image.png" alt>
        <div>
            <form onsubmit="return check_form();" action="" method="post">
                <h2>Đăng nhập</h2>
                <p>Chào mừng quay trở lại!</p>
                <label>
                    <p class="input-message" id="email-message"></p>
                    <div>
                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Vector" d="M13.5 0H1.5C0.675 0 0.00749999 0.632812 0.00749999 1.40625L0 9.84375C0 10.6172 0.675 11.25 1.5 11.25H13.5C14.325 11.25 15 10.6172 15 9.84375V1.40625C15 0.632812 14.325 0 13.5 0ZM13.2 2.98828L7.8975 6.09609C7.6575 6.23672 7.3425 6.23672 7.1025 6.09609L1.8 2.98828C1.6125 2.87578 1.5 2.68594 1.5 2.48203C1.5 2.01094 2.0475 1.72969 2.475 1.97578L7.5 4.92188L12.525 1.97578C12.9525 1.72969 13.5 2.01094 13.5 2.48203C13.5 2.68594 13.3875 2.87578 13.2 2.98828Z" fill="#BDBDBD"/>
                        </svg>                                
                        <input required class="email" type="text" placeholder="Email" name="email">
                    </div>
                </label>
                <label>
                    <p class="input-message" id="pass-message"></p>
                    <div>
                        <svg width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Vector" d="M12.1875 6.5625V4.6875C12.1875 2.0625 10.125 0 7.5 0C4.875 0 2.8125 2.0625 2.8125 4.6875V6.5625C1.21875 6.5625 0 7.78125 0 9.375V15.9375C0 17.5312 1.21875 18.75 2.8125 18.75H12.1875C13.7812 18.75 15 17.5312 15 15.9375V9.375C15 7.78125 13.7812 6.5625 12.1875 6.5625ZM4.6875 4.6875C4.6875 3.09375 5.90625 1.875 7.5 1.875C9.09375 1.875 10.3125 3.09375 10.3125 4.6875V6.5625H4.6875V4.6875ZM8.53125 12.6562L8.4375 12.75V14.0625C8.4375 14.625 8.0625 15 7.5 15C6.9375 15 6.5625 14.625 6.5625 14.0625V12.75C6 12.1875 5.90625 11.3437 6.46875 10.7812C7.03125 10.2187 7.875 10.125 8.4375 10.6875C9 11.1562 9.09375 12.0937 8.53125 12.6562Z" fill="#BDBDBD"/>
                        </svg>                                
                        <input required class="pass" type="password" placeholder="Mật khẩu" name="password">
                    </div>
                </label>
                <p style="width: fit-content; align-self:self-end; font-weight: 600; cursor:pointer;">Quên mật khẩu?</p>
                <input class="submit" type="submit" value="Đăng nhập">
                <a href="<?=$SITE_URL?>/dangky" class="inline-content">
                    <p>Chuyển sang đăng ký</p>
                    <svg width="12" height="15" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector" d="M0 9.44109C0 8.65897 0.671578 8.02493 1.5 8.02493H19.0739L12.4998 2.47157C11.8824 1.95004 11.8297 1.05476 12.3821 0.471886C12.9345 -0.110989 13.8828 -0.160724 14.5002 0.360802L24.0001 8.38571C24.3181 8.65437 24.4999 9.0382 24.4999 9.44109C24.4999 9.844 24.3181 10.2278 24.0001 10.4965L14.5002 18.5214C13.8828 19.0429 12.9345 18.9933 12.3821 18.4104C11.8297 17.8275 11.8824 16.9321 12.4998 16.4106L19.0739 10.8573H1.5C0.671578 10.8573 0 10.2232 0 9.44109Z" fill="#4E4E4E"/>
                    </svg>                                                                   
                </a>
            </form>
        </div>
    </div>
</main>
<script>
    function check_form() {
        var email_input = document.querySelector(".email");
        var pass_input = document.querySelector(".pass");

        var email_message = document.querySelector("#email-message");
        var pass_message = document.querySelector("#pass-message");

        var format_email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        if (format_email.test(email_input.value) == false) {
            email_message.innerHTML = "Email không đúng!";
            email_input.value = "";
            return false;
        }
        return true;

    }
</script>