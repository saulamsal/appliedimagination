<?php
session_unset();
// include "header.php";
?>


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Motivational Speakers</title>
    <link href="./public/css/fontawesome.css" rel="stylesheet">
    <link href="./public/css/nouislider.min.css" rel="stylesheet">
    <link href="./public/css/app.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:medium,bold,500,700' rel='stylesheet' type='text/css'>
    <link rel="icon" href="./public/images/icon.ico" type="image/x-icon">
    <script src="./public/js/jquery.min.js" type="application/javascript"></script>
    <script src="./public/js/wnumb.min.js"></script>
    <script src="./public/js/nouislider.min.js"></script>
    <style>
        @font-face {
            font-family: "wticons";
            src: url("data:font/woff2;charset=utf-8;base64,d09GMgABAAAAABXgAAsAAAAALwAAABWNAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHIVsBlYAigQKvwizBQE2AiQDghwLgRAABCAFhAoHhEAbqidVpGGkVT/I/v9yQA8Y50NVOJxwnnUiNm8QuM8SwVp7FFClMmooX7ZLtjzX7S4QB3LdgMt3ZJLjMZt4n5j0fShWEZbu18SNYn9FTL8aSsnDf2PPum9mviAiSUykWbbO6WKRRog0qPiuH65Z09ssAZVTZKH0O/E98N8HcIi2efAKikUbBVIKVlI9wQSzMANzkSwDV2kuWtfJqlm0C10k0BP35v5S63XgG49yQIJWEd+8OfWljaWkGChCaMAsKEFg4yPlYv2j9P7NTZFCHTA6dvf/r0i/nGrmAlCA2GkDy7IG6uKK/PKS9LrX26kBYCVousrgD29RtEEXTWMgzV3FzP39mmmzB4Cq8IpfRFUDS0AlOvPzNzeXv38P9qhNtky5lJIUmBWyOmBQRXZoTKdC11ZXyE6dqyerW6EqXHWr6e4ZwW2mB2KfIIOxVQ4Yd/eFW2wjKouFlR9VHQE0NHfxN23GvGWa7tt87ICOELZngNucsW/3zs3qXiQU4RaYm5iuaSJx8c8rH8MmxsW66E95GpA2pRYJxfKHNhiMpmbmCISFX3GKpLDzs8IWNZw1bLCxtdNbWdcWsEZHJ1Fm0UpZ7x2MZkiU3tI0agSFTGMYB2kaTyANysxjo5wI5iLa2dLuyJamGjYqCmwkIdww6aOPHuZHK9hSnfuw0SG6CYGRvK6Nh13MPYxjrgnyTf8GnjLaw/lQw22d0jnqDRckpIN6QgcIp7D2OF644OxmWJpJ5WjY2xhnI+QMlfeCZzNYiapmUbE5kqBxs8g63YgOcJWnTO08I6/fO1tJ8XL6Al3RPSO0TA6QDU7ylENEfurqcKZ8M7ACxpgFmbmgIASGp6FiYNjClRLTmG5kyKFzZQ1KiS26JyUD46B3cm8+ItG2kGt4MDMhpjBlamHZNdU7ODq7uJku0odYoAKalPQK9/jbj08GRwIJmbEyLNoxfZt3pn7NfMGa/HYqJA8VIAP9pkloksp/cZnSD4H7rF/8R3O/qAQwwzxL7XbI6a9ZYarQ9mZ7Hfk6WQLNgsJi1WQtGphiqhmmmWyk3tVg0d1J3QxztrGya3Z69EjHGE7tvfUZ/u4EVBQag8MTSWQqjd5hFbPYHB5fKBJLZHKFUqX24nirA1HFkpoydcY0MJnVw0hGfScOC3y5rasyauhuNpbjO2DIfLp/dycgszcG5ELYxA5U72EKpsFUTG9/BkzDPOzDWAoYCWyGvsAWmAhshX7ANhgMbIfhwA6YAOyESdgFw4DdMB7YCyOAfTAU2A+jgAMwEDgI/YFDMBY4AmOAozAEOAaDgOMwADgBo4GTMB2noA9wuvk48DUEXEwAGZAJsBGCixwED7kIPvIQQuQjRChASFCIkKIIIUMxQoEShBKlCBXKEGqUIzSoQGhRidChCqFHNcKIGoQJtQgL6hBW1CNsaJDYIY6QOCFOkLhAnCFxhbhA4gZxhcQd4gaJB8QdEk+IByReEE/w3SPDxzGLL/gkrCD+E4sylnF+m2f5h4WQ8NUCFzSBVj6ztOWFFTmtUwJ1JJHQ+LzYbVUwXdNZ3MWKzQ1RwZ66ZGiQ22RmobFRswQsjySFQbg3UcPZ/8QyUFtR6AaXZkIbtFEY5XbfhepHuyfFtREQGvBJ2fzmDBZuIxKSEMVHVahPfpAkOhPjbkYlMeCm0Yyb4pabYOb/a63JzU/XP/y49v7Gx56bJhT83QlL0R+7MkAzusS9X+rHG+31d/nzriYja0A4htBHsEOjb47J7X/t+XT99rgpyfedRrSLCRhOIjnl0PsAdP85SNqdLzhXWRYUJiGIM2ftpiC6lCNjEOamlWeKsJM0cjoVW9HtFzyUeHkSUZv8DRbghXZ6zkD7g+3qH1wo/p61L7SFqBKNwPNBUqcvMAhewfniZdA+X3v1NMnsXOQUp2dYdz0sVjcC/6bar9ZZB4vVy8iorIsx/olJN8+Sf8U/bGcDw/TWpw/OUFCfygsZEo703um8GB/zkGz1R/uNbHQau6jm+Us0y/zowt0hDTaSNFWVsidA0uJMpURSxrUEZlr8YVKkVII8nyPK3nELlowBJ1GsrBM0ofy94oYouaACBA2CVLqpnBKH85jTzanTfcJdxziGDCLCEWAosPIsYiNvTYSk8bqEIPn9NQD5bABBG9De/Ohe6de7Amrf/rzscrjcy+2v6o6+EoP2Fw4Wj1rlgyOuWMzl0vXuoYKhEoNEK3pBnyPtGRKvmWJB6lyumGumyOWIb6zRHfrUzEzyKYGBooHiwWpeDMWL4dKxqU7jiwegrrti7sHRW6Fxw6HXmUGPs78QFCwbKtCc/c4eK3Ostsz63a6RshGrfHTFoLuXhEyrqTwJXDJh7JARcDxikVBp1n9MsvgetxgcKfrJTFR3wn+28H99keY06hDiOm5ATTs33Nh8c7hYc89SmVV3tJW3DWmufgvt4q/8rf3J/IuQGSQDaQDNx+DelpTqxgsQjG+8j1SEuzoJYrXuiZeIu1/l59vTxFR9u9cN0Dw0vw8mgIEdz0NwaOPjuJTfZ6B5E1j5U/AKQFD4RlmUJ55sQQb9qfpZrDKXbMM/sPrmp2kjvmgWSn/ZHXCJjfyMmUpJdDvaikA2PDsl3G10nmqqULxf9hKxzuCyEMnxwnEN1BxhwRC/0Mp9OGgVdzBlAXabmpK2opwO2KEx2wp1+eD6m3ZX9FhY3yYSVqne5W+g3VmW2JY45XT/87/y37oHxV8kP3sCy5NfibAsrL54U9+wymSAFkhvpVL85MnTf30vl292k2kOoztZgABfMIpqaceUrIs9jHqlXnQMZgkUbwFsZ0gm4cJlS4tCfT0D1EpYTAfLtHqPk9KiT+K8N9Yl2koHBf+NNCGAGbBDaAN2puoxQBBP50KvVj+2ZhjSNGH1NB2ivGGCZ02KHGpmSOZ0Gl1tswKasdYgeSZ7aELx7pegS3vm5t3DrfLkzS8RwxlHXAG3azC3EnGUI5PtfPAZzlZPnDRheIJxwxdOTkQL3xFHh81q6Oje1aVUqJXwvlU9yl194mN6BUZSkz4Wm0FZ8r6D9BX2FzpDCdU+j7NgejVl7ylHg/usu5lGKJMGdIiXalTMpQ699nD1wiQUpBfkxsdb4wGLWnsan/lfrbgFvysz5MLMEJUJtd6mQFFE5FamagwhKCbie74xXjPov7XDF0cblQbVZg5lbmZ6/7T71Y5/exbl/TTN7GDTaFCv0aVrJrkGW9psshviuo2nJidefnzvCIZ6anuwqu+tn52cqGPZ6h8UN79eRXBVm4ykAXBfUwaQjIOkJS5apeB8kVwyr90CMWgCGEZ/3Ih/4kk3kvOSguIDAuKDko4I14njA5KCjgj5n4CovCH8qdtR+lN4o3KjZ0qQmiZMGBPSVqAAYydoQnWQZ0rjQ/IPTTwRKUEev+ofINHpkwbnzJGTrbAHP6+54uEzaCA4EQVlZ5MAGO0VhnfMMC5Zbndua/gRyljZST4pXNmuULQrMwpnn/MYGhr/4MHZhEuRz1HQhAn94dZ668QHSk2YdnkmJ/f3H3zzZnTUCFoy58z5NDy8aPF/0LaOFJdwj5GpU6/5YEFHflCAj0KrGOtMvugDKIqw97lYLgUFfOi+qLgIGI0RuS4Y1xVsY24aW+SCcVnhaoRrjH666SaRURRp9PHmjCdPnj7Rw+6pHu/LPOPpUzC6tOZ1nEE5dsQkr/WC1F6LdiLsybTs3GW5CcXs1hiZ53k+79z5meVuOQTlYcPDBifapsxh40OWuYP168EjFX9j8kTW2Xda/9QJ6Cc06CQp2NPgKZ09+91J0xAJCPaflcmWOkod31kK/8l5i/C9DF+5D9cYiOvLH2KM6b0uwvH6YPThAf9p8dDwQWexq1zZzCmJKSqI0XE/lXAKo6ML2SWtzShvTGEBW8fRqw2BXUNDPnTsI2Zkwa0MloqpVDJVrF3CdWKmkqXaJdTLzJJOWlJtasrU1NTY2sSWkpSOFGJS+RQqAomVIBGdLOulK5dl+kjkXLLQ8yfsx5delVIY5xhP+NXSUZgT1JNcavGO4ntpn3Nfv6NyT1K3UNp3+a2aXO/YgD6ObnB0qPcHVtvuTHjf5KSwl8mL9vZcw8WSsbBAFw41DF2UPw+OpKhQWrzywnHVtiXzFXOvf0S7xZVsnXLi5Oml/l9vgv+h0XsaNhTvWK6pyvBPdIWsPRNt1e5IHJsmRSQlFe1/1HsVsQwun5xMLL4uvfrsT9OZl8fqGhq1K6obbVHWNqlxDngnLNc5o3kywjX0ak9f7Lf2UpjW0I/d97h72b0vk3yWlGhTIsrj2O5hLjhixMHlZFXSnIpVfVvEyTvzF9Tvvju+ZmBe58L32DjyTNSawObul+LlBJWhUVInFtdJGtHChXt4owQtlNOQQ0rx1iyWA7CE5Ddp6TZdKk6D03Vvm5QAT4QXL6UnAeLR62VRbUrPRqeMPi2LbnvVrkGixJAnmZ8KRjLAEwtsrLtCCuq7nL5I39OSBWe+1kx/oF+gj4ifKKBH5UXtuDn15o68yCgGvy4eWtvd7B8TYOLdCGQH3Lj/NSdTrVfH58Sv1K8cau1ple1dGkZLTi0H+W/1z4NmlZLpS9+GTyDd2c3UZbDkV8QTfY9eOaso5IDBWeXmIVZOnGpkkoYipbI7JQHRIl00u2TK6HVdZHtxxFWTAK0PolYlbDxlAIyTLN0JnSGeFP9TTrpMit4naDKp1dOip4Fp/Glq68CBt2Qm3e6WnDEcPVY40ecFn0cpBe15rceJ82UA77e3jb/f6Ci2l4Qnn1pxBSsPwoBAhJpCQRclGuAEzDhUIk564Jh66ZQJ0qprj5xs1bJlDbt2n5rGMg/APpJdNtI0bgZRpZIrdIFZeeSiUiHAJkgSk/buv9Q7aNUMgxf0JuWiq+LBZ++a9t1UFKQ/o7rQBgUhNbF2eEcYlz6u2Mrhgjli6GaP2eNgSdONmE2PZ06/a57o01SsldoN5LLdQp2xhPCtS7yVgtkVs1duDi1cn7igYNe5muxVczsnnsOO855iuyyhc6aJcGKcclKNsJLPrxTWwIUL95AaIQRWIfy1Ngmkeyd5xU8QAxiodL1/6Q0aCfTs3TnvwMNXFy68erhtzc5uz8CRQDcEtPM9hLheFRas0QaHkW4tnnKLHKYJfsUbFsBBuJz48OGnyfwzh+zyRVwGxoGPAz279aeKIn7tiZSNZgWEBenFC9xwjXif38fD4n/7nApYJBY/Ty++yTvK28TzWmGW7sUYsFFYA2an9WAtkQ2IvU18r7fOq1Chawg7EC5HJ+eH+gmno6Ln4BdYeffM7QiLoU3KRnqWwZFWjl1qAcaalIAgZWMRVtgaTRKZnpy6MWrj3aqNThvpT0CzGcvd4ilBG4Mo8QWYZ+QKp4jNLmp1XELzRccFXC9/CZ349Pq5iQyNb25tTmRWRHhWZO7DhRduPGeqzdX4JjK+8o9Pf0vXxevoQEOR0UwqSiBXfs95KLqRJFyae+OGBlJUpliziuLKw3ymtJCILBZftZac4EbhmGPNHIp7PHktX5XFighJoX3O5blSVGaRz8OsV1mY6diF8ZABtGTynh1iAhsvOjp1IAYS6lZtMijAik2rdQmRILIDydBDEzN2Qck4MjG4HMmqgOog1wk1OVj677Vp1h4pcATkUKoMw1iRVNZeqhm54TGZ8WIMXnZvsS8sGG4jhQEIjhPBINihsQACJ2eBfUd8FMSt9wf/Y3wxToPPnn37U+l7TzlxMIWfMEVw4Zq2NroBt7yxoDW/GGgbhv9NY3F83QNM5qMoGDIc9epESi7oT92EilhjZW/tesTQefFZz20UM4e6gEDausQS93P8faRvq9XEgl1QWp2ASqR/ZeNMrMshM0JmwdCanwy0C4N5e4WWb/MIk/WQjkaG27w5XpwHRkeXyghKwbL5GIDcWtrCDZghmCRUznARKubcQ/dhWC70qT8ZilBJqAGNacmP0QRzUsPGuWj0+jR3ZWgKJzgpKrcZjsWsveNsCfCfG+LrHUmQ2Ffq5yLGarXXCoj2Up2PxIUp9xVDCQC328jTcTg6nkxdd4+Q7dhkq/HIjFuiOfDycEYst9g9x0vXyePqSjjpcSzecigFz2PbtwF3jxzPrDk6HQfwrlsODT+mbvDfhR/5EczPwjRqHVGP9JhulpzjGRLyY9dIN6Zl+J/p8Ah+F9GJuCnzR6/6MJns/HqY7v82g4UJbtlUzm5qtEoYGUE6LnlEzv5IHCEiCaHhnnAC0tMB3pKl9fnRuZGRudH5ZuHCjefaze8ZdtdptBrN2t/a32Ax+VHvG7bkYREwwfKjPgEcNVdBybwdi4WyI7/lZXIrZA8PFPzoQLEjtasGNE+OyCgogoxJI5AjRE3aR9S/eE4CczJE8vjHPKbcg26REGtTgnRGJwK0D+PzwfyM85AXpu/oyQM6HVCm5dnJVIZyz/8GpacKR5QleQvGpH35waPOBjqfZmCM2achk5fpdmYjCahXQXcD0lkoODwvBc81Lh703xilA4//vpLlOXG/LbGD3gAQmbbPj0wkJH/H1hJaJ+RDFwCovGFaT7ao1pK/qFjM3Ly47T13/J9Y6EWldJBbMMQeRDWYAwKp0CF8zWUxFV5HPvB/lEAkIdFiBqDyEIBy6H/qBLHSCADFp2HUanpF/g/qz+lqn9P6sph5YGbcl2JSQkN/BP9jWHNnmnNYqCkz/wUTUrtx2bopV6zbQEUjnaGqpic01Fdgzo20kqErypJCU/ssLlmf4bL1La5YP4KKtjZBVVMvoKEV/kvSSI+IfpwrdOET0spI8oJOKf0ChRydeI/fhLtxBgckGRLxbESo0w2zFprQihM6BmNQeMICFMcZs/9Yr7Xsg4sV2tYLyynICT6BVMWQSL6UB/1fgARK3AsTQgQKjubOzKm0LjGQaAs1R+NGtdRGk6/VxN6cIEuQ6xFFaijFz6xOPqkAFJVjZRrM//8J5tp0qizOOcRONWZgLJNlPTOSTm8wmsyWfzv9CFab3eGk0ugMJovN4fL4AqFILJHK5AqlSq3R6vQGo6mZuYWllTXMIFKUaDHYOLh4+ASEtnb2Do5Ozi6pli+FleMxzyZCFNzJQOVQSTOyzSNk0QuqnNh6X1YaM7xOqwndmJpEUFH1zfjAh4ZNLzNH6OISrLILfWiENIC/ly4ZnQoUYXQByVOqsqeLSwa6kkZ1RmmTzQNTHOSPQ4Je/mmcmtC8zyyiZ0LIQZVtUlW1hr7PgWF4VJUgxbrihr6BzSs757MfgGVupg/Hnipj5u6kCNUQuecCQ4oX5QwzKmmWVbwDqqoEXg3HykjB8U9abyAMw4skjBpUn4m8Pb1XJtf+Iymo4rBEYGRA6YtVI14jpz2lHl0R++TlmAAAAAA=") format("woff2");
        }

        .wticons {
            line-height: 1;
        }

        .wticons:before {
            font-family: wticons !important;
            font-style: normal;
            font-weight: normal !important;
            vertical-align: top;
        }

        .wticon-account:before {
            content: "\f101";
        }

        .wticon-add:before {
            content: "\f102";
        }

        .wticon-casual:before {
            content: "\f103";
        }

        .wticon-check:before {
            content: "\f104";
        }

        .wticon-checkSmall:before {
            content: "\f105";
        }

        .wticon-chevron:before {
            content: "\f106";
        }

        .wticon-copy:before {
            content: "\f107";
        }

        .wticon-copySmall:before {
            content: "\f108";
        }

        .wticon-dismiss:before {
            content: "\f109";
        }

        .wticon-error:before {
            content: "\f10a";
        }

        .wticon-expand:before {
            content: "\f10b";
        }

        .wticon-feedback:before {
            content: "\f10c";
        }

        .wticon-find:before {
            content: "\f10d";
        }

        .wticon-formal:before {
            content: "\f10e";
        }

        .wticon-grayLogo:before {
            content: "\f10f";
        }

        .wticon-ignore:before {
            content: "\f110";
        }

        .wticon-info:before {
            content: "\f111";
        }

        .wticon-leftChevron:before {
            content: "\f112";
        }

        .wticon-logo:before {
            content: "\f113";
        }

        .wticon-love:before {
            content: "\f114";
        }

        .wticon-paste:before {
            content: "\f115";
        }

        .wticon-pin:before {
            content: "\f116";
        }

        .wticon-premium:before {
            content: "\f117";
        }

        .wticon-premiumDetail:before {
            content: "\f118";
        }

        .wticon-premiumFull:before {
            content: "\f119";
        }

        .wticon-refine:before {
            content: "\f11a";
        }

        .wticon-rewrite:before {
            content: "\f11b";
        }

        .wticon-rightChevron:before {
            content: "\f11c";
        }

        .wticon-rocket:before {
            content: "\f11d";
        }

        .wticon-sentenceExamples:before {
            content: "\f11e";
        }

        .wticon-shorten:before {
            content: "\f11f";
        }

        .wticon-unlock:before {
            content: "\f120";
        }

        .wticon-warn:before {
            content: "\f121";
        }

        .wticon-x:before {
            content: "\f122";
        }

        /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9zcmMvc2hhcmVkL0ljb25zLmZvbnQuanMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7Q0FDQyxzQkFBc0I7Q0FDdEIsNjJPQUE2Mk87QUFDOTJPOztBQUVBO0NBQ0MsY0FBYztBQUNmOztBQUVBO0NBQ0MsK0JBQStCO0NBQy9CLGtCQUFrQjtDQUNsQiw4QkFBOEI7Q0FDOUIsbUJBQW1CO0FBQ3BCOztBQUVBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCIiwic291cmNlc0NvbnRlbnQiOlsiQGZvbnQtZmFjZSB7XG5cdGZvbnQtZmFtaWx5OiBcInd0aWNvbnNcIjtcblx0c3JjOiB1cmwoXCJkYXRhOmZvbnQvd29mZjI7Y2hhcnNldD11dGYtODtiYXNlNjQsZDA5R01nQUJBQUFBQUJYZ0FBc0FBQUFBTHdBQUFCV05BQUVBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUhJVnNCbFlBaWdRS3Z3aXpCUUUyQWlRRGdod0xnUkFBQkNBRmhBb0hoRUFicWlkVnBHR2tWVC9JL3Y5eVFBOFk1ME5WT0p4d25uVWlObThRdU04U3dWcDdGRkNsTW1vb1g3Wkx0anpYN1M0UUIzTGRnTXQzWkpMak1adDRuNWowZlNoV0VaYnUxOFNOWW45RlRMOGFTc25EZjJQUHVtOW12aUFpU1V5a1diYk82V0tSUm9nMHFQaXVINjVaMDlzc0FaVlRaS0gwTy9FOThOOEhjSWkyZWZBS2lrVWJCVklLVmxJOXdRU3pNQU56a1N3RFYya3VXdGZKcWxtMEMxMGswQlAzNXY1UzYzWGdHNDl5UUlKV0VkKzhPZldsamFXa0dDaENhTUFzS0VGZzR5UGxZdjJqOVA3TlRaRkNIVEE2ZHZmL3IwaS9uR3JtQWxDQTJHa0R5N0lHNnVLSy9QS1M5THJYMjZrQllDVm91c3JnRDI5UnRFRVhUV01nelYzRnpQMzltbW16QjRDcThJcGZSRlVEUzBBbE92UHpOemVYdjM4UDlxaE50a3k1bEpJVW1CV3lPbUJRUlhab1RLZEMxMVpYeUU2ZHF5ZXJXNkVxWEhXcjZlNFp3VzJtQjJLZklJT3hWUTRZZC9lRlcyd2pLb3VGbFI5VkhRRTBOSGZ4TjIzR3ZHV2E3dHQ4N0lDT0VMWm5nTnVjc1cvM3pzM3FYaVFVNFJhWW01aXVhU0p4OGM4ckg4TW14c1c2NkU5NUdwQTJwUllKeGZLSE5oaU1wbWJtQ0lTRlgzR0twTER6czhJV05adzFiTEN4dGROYldkY1dzRVpISjFGbTBVcFo3eDJNWmtpVTN0STBhZ1NGVEdNWUIya2FUeUFOeXN4am81d0k1aUxhMmRMdXlKYW1HallxQ213a0lkd3c2YU9QSHVaSEs5aFNuZnV3MFNHNkNZR1J2SzZOaDEzTVBZeGpyZ255VGY4R25qTGF3L2xRdzIyZDBqbnFEUmNrcElONlFnY0lwN0QyT0Y2NDRPeG1XSnBKNVdqWTJ4aG5JK1FNbGZlQ1p6TllpYXBtVWJFNWtxQnhzOGc2M1lnT2NKV25UTzA4STYvZk8xdEo4WEw2QWwzUlBTTzBUQTZRRFU3eWxFTkVmdXJxY0taOE03QUN4cGdGbWJtZ0lBU0dwNkZpWU5qQ2xSTFRtRzVreUtGelpRMUtpUzI2SnlVRDQ2QjNjbTgrSXRHMmtHdDRNRE1ocGpCbGFtSFpOZFU3T0RxN3VKa3Uwb2RZb0FLYWxQUUs5L2piajA4R1J3SUptYkV5TE5veGZadDNwbjdOZk1HYS9IWXFKQThWSUFQOXBrbG9rc3AvY1puU0Q0SDdyRi84UjNPL3FBUXd3enhMN1hiSTZhOVpZYXJROW1aN0hmazZXUUxOZ3NKaTFXUXRHcGhpcWhtbW1XeWszdFZnMGQxSjNReHp0ckd5YTNaNjlFakhHRTd0dmZVWi91NEVWQlFhZzhNVFNXUXFqZDVoRmJQWUhCNWZLQkpMWkhLRlVxWDI0bmlyQTFIRmtwb3lkY1kwTUpuVncwaEdmU2NPQzN5NXJhc3lhdWh1TnBiak8yRElmTHAvZHljZ3N6Y0c1RUxZeEE1VTcyRUtwc0ZVVEc5L0JrekRQT3pEV0FvWUNXeUd2c0FXbUFoc2hYN0FOaGdNYklmaHdBNllBT3lFU2RnRnc0RGRNQjdZQ3lPQWZUQVUyQStqZ0FNd0VEZ0kvWUZETUJZNEFtT0FvekFFT0FhRGdPTXdBRGdCbzRHVE1CMm5vQTl3dXZrNDhEVUVYRXdBR1pBSnNCR0NpeHdFRDdrSVB2SVFRdVFqUkNoQVNGQ0lrS0lJSVVNeFFvRVNoQktsQ0JYS0VHcVVJelNvUUdoUmlkQ2hDcUZITmNLSUdvUUp0UWdMNmhCVzFDTnNhSkRZSVk2UU9DRk9rTGhBbkNGeGhiaEE0Z1p4aGNRZDRnYUpCOFFkRWsrSUJ5UmVFRS93M1NQRHh6R0xML2drckNEK0U0c3lsbkYrbTJmNWg0V1E4TlVDRnpTQlZqNnp0T1dGRlRtdFV3SjFKSkhRK0x6WWJWVXdYZE5aM01XS3pRMVJ3WjY2WkdpUTIyUm1vYkZSc3dRc2p5U0ZRYmczVWNQWi84UXlVRnRSNkFhWFprSWJ0RkVZNVhiZmhlcEh1eWZGdFJFUUd2QkoyZnptREJadUl4S1NFTVZIVmFoUGZwQWtPaFBqYmtZbE1lQ20wWXliNHBhYllPYi9hNjNKelUvWFAveTQ5djdHeDU2YkpoVDgzUWxMMFIrN01rQXp1c1M5WCtySEcrMzFkL256cmlZamEwQTRodEJIc0VPamI0N0o3WC90K1hUOTlyZ3B5ZmVkUnJTTENSaE9Jam5sMFBzQWRQODVTTnFkTHpoWFdSWVVKaUdJTTJmdHBpQzZsQ05qRU9hbWxXZUtzSk0wY2pvVlc5SHRGenlVZUhrU1VadjhEUmJnaFhaNnprRDdnKzNxSDF3by9wNjFMN1NGcUJLTndQTkJVcWN2TUFoZXdmbmlaZEErWDN2MU5NbnNYT1FVcDJkWWR6MHNWamNDLzZiYXI5WlpCNHZWeThpb3JJc3gvb2xKTjgrU2Y4VS9iR2NEdy9UV3B3L09VRkNmeWdzWkVvNzAzdW04R0IvemtHejFSL3VOYkhRYXU2am0rVXMweS96b3d0MGhEVGFTTkZXVnNpZEEwdUpNcFVSU3hyVUVabHI4WVZLa1ZJSThueVBLM25FTGxvd0JKMUdzckJNMG9meTk0b1lvdWFBQ0JBMkNWTHFwbkJLSDg1alR6YW5UZmNKZHh6aUdEQ0xDRVdBb3NQSXNZaU52VFlTazhicUVJUG45TlFENWJBQkJHOURlL09oZTZkZTdBbXJmL3J6c2NyamN5KzJ2Nm82K0VvUDJGdzRXajFybGd5T3VXTXpsMHZYdW9ZS2hFb05FSzNwQm55UHRHUkt2bVdKQjZseXVtR3VteU9XSWI2elJIZnJVekV6eUtZR0Jvb0hpd1dwZURNV0w0ZEt4cVU3aml3ZWdycnRpN3NIUlc2Rnh3NkhYbVVHUHM3OFFGQ3diS3RDYy9jNGVLM09zdHN6NjNhNlJzaEdyZkhURm9MdVhoRXlycVR3SlhESmg3SkFSY0R4aWtWQnAxbjlNc3ZnZXR4Z2NLZnJKVEZSM3duKzI4SDk5a2VZMDZoRGlPbTVBVFRzMzNOaDhjN2hZYzg5U21WVjN0SlczRFdtdWZndnQ0cS84cmYzSi9JdVFHU1FEYVFETngrRGVscFRxeGdzUWpHKzhqMVNFdXpvSllyWHVpWmVJdTEvbDU5dlR4RlI5dTljTjBEdzB2dzhtZ0lFZHowTndhT1BqdUpUZlo2QjVFMWo1VS9BS1FGRDRSbG1VSjU1c1FRYjlxZnBackRLWGJNTS9zUHJtcDJranZtZ1dTbi9aSFhDSmpmeU1tVXBKZER2YWlrQTJQRHNsM0cxMG5tcXFVTHhmOWhLeHp1Q3lFTW54d25FTjFCeGh3UkMvME1wOU9HZ1ZkekJsQVhhYm1wSzJvcHdPMktFeDJ3cDErZUQ2bTNaWDlGaFkzeVlTVnFuZTVXK2czVm1XMkpZNDVYVC84Ny95MzdvSHhWOGtQM3NDeTVOZmliQXNyTDU0VTkrd3ltU0FGa2h2cFZMODVNblRmMzB2bDI5Mmsya09venRaZ0FCZk1JcHFhY2VVcklzOWpIcWxYblFNWmdrVWJ3RnNaMGdtNGNKbFM0dENmVDBEMUVwWVRBZkx0SHFQazlLaVQrSzhOOVlsMmtvSEJmK05OQ0dBR2JCRGFBTjJwdW94UUJCUDUwS3ZWaisyWmhqU05HSDFOQjJpdkdHQ1owMktIR3BtU09aMEdsMXRzd0thc2RZZ2VTWjdhRUx4N3BlZ1Mzdm01dDNEcmZMa3pTOFJ3eGxIWEFHM2F6QzNFbkdVSTVQdGZQQVp6bFpQbkRSaGVJSnh3eGRPVGtRTDN4RkhoODFxNk9qZTFhVlVxSlh3dmxVOXlsMTk0bU42QlVaU2t6NFdtMEZaOHI2RDlCWDJGenBEQ2RVK2o3TmdlalZsN3lsSGcvdXN1NWxHS0pNR2RJaVhhbFRNcFE2OTluRDF3aVFVcEJma3hzZGI0d0dMV25zYW4vbGZyYmdGdnlzejVNTE1FSlVKdGQ2bVFGRkU1RmFtYWd3aEtDYmllNzR4WGpQb3Y3WERGMGNibFFiVlpnNWxibVo2LzdUNzFZNS9leGJsL1RUTjdHRFRhRkN2MGFWckpya0dXOXBzc2h2aXVvMm5KaWRlZm56dkNJWjZhbnV3cXUrdG41MmNxR1BaNmg4VU43OWVSWEJWbTR5a0FYQmZVd2FRaklPa0pTNWFwZUI4a1Z3eXI5MENNV2dDR0VaLzNJaC80a2sza3ZPU2d1SURBdUtEa280STE0bmpBNUtDamdqNW40Q292Q0g4cWR0UitsTjRvM0tqWjBxUW1pWk1HQlBTVnFBQVl5ZG9RbldRWjByalEvSVBUVHdSS1VFZXYrb2ZJTkhwa3dibnpKR1RyYkFIUDYrNTR1RXphQ0E0RVFWbFo1TUFHTzBWaG5mTU1DNVpibmR1YS9nUnlsalpTVDRwWE5tdVVMUXJNd3Bubi9NWUdoci80TUhaaEV1UnoxSFFoQW45NGRaNjY4UUhTazJZZG5rbUovZjNIM3p6Wm5UVUNGb3k1OHo1TkR5OGFQRi8wTGFPRkpkd2o1R3BVNi81WUVGSGZsQ0FqMEtyR090TXZ1Z0RLSXF3OTdsWUxnVUZmT2krcUxnSUdJMFJ1UzRZMXhWc1kyNGFXK1NDY1ZuaGFvUnJqSDY2NlNhUlVSUnA5UEhtakNkUG5qN1J3KzZwSHUvTFBPUHBVekM2dE9aMW5FRTVkc1Frci9XQzFGNkxkaUxzeWJUczNHVzVDY1hzMWhpWjUzays3OXo1bWVWdU9RVGxZY1BEQmlmYXBzeGg0ME9XdVlQMTY4RWpGWDlqOGtUVzJYZGEvOVFKNkNjMDZDUXAyTlBnS1owOSs5MUoweEFKQ1BhZmxjbVdPa29kMzFrSy84bDVpL0M5REYrNUQ5Y1lpT3ZMSDJLTTZiMHV3dkg2WVBUaEFmOXA4ZER3UVdleHExelp6Q21KS1NxSTBYRS9sWEFLbzZNTDJTV3R6U2h2VEdFQlc4ZlJxdzJCWFVORFBuVHNJMlprd2EwTWxvcXBWREpWckYzQ2RXS21rcVhhSmRUTHpKSk9XbEp0YXNyVTFOVFkyc1NXa3BTT0ZHSlMrUlFxQW9tVklCR2RMT3VsSzVkbCtramtYTExROHlmc3g1ZGVsVklZNXhoUCtOWFNVWmdUMUpOY2F2R080bnRwbjNOZnY2TnlUMUszVU5wMythMmFYTy9ZZ0Q2T2JuQjBxUGNIVnR2dVRIamY1S1N3bDhtTDl2WmN3OFdTc2JCQUZ3NDFERjJVUHcrT3BLaFFXcnp5d25IVnRpWHpGWE92ZjBTN3haVnNuWExpNU9tbC9sOXZnditoMFhzYU5oVHZXSzZweXZCUGRJV3NQUk50MWU1SUhKc21SU1FsRmUxLzFIc1ZzUXd1bjV4TUxMNHV2ZnJzVDlPWmw4ZnFHaHExSzZvYmJWSFdOcWx4RG5nbkxOYzVvM2t5d2pYMGFrOWY3TGYyVXBqVzBJL2Q5N2g3MmIwdmszeVdsR2hUSXNyajJPNWhMamhpeE1IbFpGWFNuSXBWZlZ2RXlUdnpGOVR2dmp1K1ptQmU1OEwzMkRqeVROU2F3T2J1bCtMbEJKV2hVVkluRnRkSkd0SENoWHQ0b3dRdGxOT1FRMHJ4MWl5V0E3Q0U1RGRwNlRaZEtrNkQwM1Z2bTVRQVQ0UVhMNlVuQWVMUjYyVlJiVXJQUnFlTVBpMkxibnZWcmtHaXhKQW5tWjhLUmpMQUV3dHNyTHRDQ3VxN25MNUkzOU9TQldlKzFreC9vRitnajRpZktLQkg1VVh0dURuMTVvNjh5Q2dHdnk0ZVd0dmQ3QjhUWU9MZENHUUgzTGovTlNkVHJWZkg1OFN2MUs4Y2F1MXBsZTFkR2taTFRpMEgrVy8xejRObWxaTHBTOStHVHlEZDJjM1VaYkRrVjhRVGZZOWVPYXNvNUlEQldlWG1JVlpPbkdwa2tvWWlwYkk3SlFIUklsMDB1MlRLNkhWZFpIdHh4RldUQUswUG9sWWxiRHhsQUl5VExOMEpuU0dlRlA5VFRycE1pdDRuYURLcDFkT2lwNEZwL0dscTY4Q0J0MlFtM2U2V25ERWNQVlk0MGVjRm4wY3BCZTE1cmNlSjgyVUE3N2UzamIvZjZDaTJsNFFubjFweEJTc1B3b0JBaEpwQ1FSY2xHdUFFekRoVUlrNTY0Smg2NlpRSjBxcHJqNXhzMWJKbERidDJuNXJHTWcvQVBwSmROdEkwYmdaUnBaSXJkSUZaZWVTaVVpSEFKa2dTay9idXY5UTdhTlVNZ3hmMEp1V2lxK0xCWisrYTl0MVVGS1EvbzdyUUJnVWhOYkYyZUVjWWx6NnUyTXJoZ2psaTZHYVAyZU5nU2RPTm1FMlBaMDYvYTU3bzAxU3NsZG9ONUxMZFFwMnhoUEN0Uzd5Vmd0a1ZzMWR1RGkxY243aWdZTmU1bXV4VmN6c25uc09PODU1aXV5eWhjNmFKY0dLY2NsS05zSkxQcnhUV3dJVUw5NUFhSVFSV0lmeTFOZ21rZXlkNXhVOFFBeGlvZEwxLzZRMGFDZlRzM1RudndNTlhGeTY4ZXJodHpjNXV6OENSUURjRXRQTTloTGhlRlJhczBRYUhrVzR0bm5LTEhLWUpmc1ViRnNCQnVKejQ4T0dueWZ3emgrenlSVndHeG9HUEF6Mjc5YWVLSW43dGlaU05aZ1dFQmVuRkM5eHdqWGlmMzhmRDRuLzduQXBZSkJZL1R5Kyt5VHZLMjhUeldtR1c3c1VZc0ZGWUEyYW45V0F0a1EySXZVMThyN2ZPcTFDaGF3ZzdFQzVISitlSCtnbW5vNkxuNEJkWWVmZk03UWlMb1UzS1JucVd3WkZXamwxcUFjYWFsSUFnWldNUlZ0Z2FUUktabnB5Nk1XcmozYXFOVGh2cFQwQ3pHY3ZkNGlsQkc0TW84UVdZWitRS3A0ak5MbXAxWEVMelJjY0ZYQzkvQ1ozNDlQcTVpUXlOYjI1dFRtUldSSGhXWk83RGhSZHVQR2VxemRYNEpqSys4bzlQZjB2WHhldm9RRU9SMFV3cVNpQlhmczk1S0xxUkpGeWFlK09HQmxKVXBsaXppdUxLdzN5bXRKQ0lMQlpmdFphYzRFYmhtR1BOSElwN1BIa3RYNVhGaWdoSm9YM081YmxTVkdhUno4T3NWMW1ZNmRpRjhaQUJ0R1R5bmgxaUFoc3ZPanAxSUFZUzZsWnRNaWpBaWsycmRRbVJJTElEeWRCREV6TjJRY2s0TWpHNEhNbXFnT29nMXdrMU9WajY3N1ZwMWg0cGNBVGtVS29NdzFpUlZOWmVxaG01NFRHWjhXSU1Yblp2c1M4c0dHNGpoUUVJamhQQklOaWhzUUFDSjJlQmZVZDhGTVN0OXdmL1kzd3hUb1BQbm4zN1UrbDdUemx4TUlXZk1FVnc0WnEyTnJvQnQ3eXhvRFcvR0dnYmh2OU5ZM0Y4M1FOTTVxTW9HREljOWVwRVNpN29UOTJFaWxoalpXL3Rlc1RRZWZGWnoyMFVNNGU2Z0VEYXVzUVM5M1A4ZmFSdnE5WEVnbDFRV3AyQVNxUi9aZU5Nck1zaE0wSm13ZENhbnd5MEM0TjVlNFdXYi9NSWsvV1Fqa2FHMjd3NVhwd0hSa2VYeWdoS3diTDVHSURjV3RyQ0RaZ2htQ1JVem5BUkt1YmNRL2RoV0M3MHFUOFppbEJKcUFHTmFjbVAwUVJ6VXNQR3VXajAralIzWldnS0p6Z3BLcmNaanNXc3ZlTnNDZkNmRytMckhVbVEyRmZxNXlMR2FyWFhDb2oyVXAyUHhJVXA5eFZEQ1FDMzI4alRjVGc2bmt4ZGQ0K1E3ZGhrcS9ISWpGdWlPZkR5Y0VZc3Q5Zzl4MHZYeWVQcVNqanBjU3plY2lnRnoyUGJ0d0Yzanh6UHJEazZIUWZ3cmxzT0RUK21idkRmaFIvNUVjelB3alJxSFZHUDlKaHVscHpqR1JMeVk5ZElONlpsK0ovcDhBaCtGOUdKdUNuelI2LzZNSm5zL0hxWTd2ODJnNFVKYnRsVXptNXF0RW9ZR1VFNkxubEV6djVJSENFaUNhSGhubkFDMHRNQjNwS2w5Zm5SdVpHUnVkSDVadUhDamVmYXplOFpkdGRwdEJyTjJ0L2EzMkF4K1ZIdkc3YmtZUkV3d2ZLalBnRWNOVmRCeWJ3ZGk0V3lJNy9sWlhJclpBOFBGUHpvUUxFanRhc0dORStPeUNnb2dveEpJNUFqUkUzYVI5Uy9lRTRDY3pKRTh2akhQS2JjZzI2UkVHdFRnblJHSndLMEQrUHp3ZnlNODVBWHB1L295UU02SFZDbTVkbkpWSVp5ei84R3BhY0tSNVFsZVF2R3BIMzV3YVBPQmpxZlptQ00yYWNoazVmcGRtWWpDYWhYUVhjRDBsa29PRHd2QmM4MUxoNzAzeGlsQTQvL3ZwTGxPWEcvTGJHRDNnQVFtYmJQajB3a0pIL0gxaEphSitSREZ3Q292R0ZhVDdhbzFwSy9xRmpNM0x5NDdUMTMvSjlZNkVXbGRKQmJNTVFlUkRXWUF3S3AwQ0Y4eldVeEZWNUhQdkIvbEVBa0lkRmlCcUR5RUlCeTZIL3FCTEhTQ0FERnAySFVhbnBGL2cvcXorbHFuOVA2c3BoNVlHYmNsMkpTUWtOL0JQOWpXSE5ubW5OWXFDa3ovd1VUVXJ0eDJib3BWNnpiUUVVam5hR3FwaWMwMUZkZ3pvMjBrcUVyeXBKQ1Uvc3NMbG1mNGJMMUxhNVlQNEtLdGpaQlZWTXZvS0VWL2t2U1NJK0lmcHdyZE9FVDBzcEk4b0pPS2YwQ2hSeWRlSS9maEx0eEJnY2tHUkx4YkVTbzB3MnpGcHJRaWhNNkJtTlFlTUlDRk1jWnMvOVlyN1hzZzRzVjJ0WUx5eW5JQ1Q2QlZNV1FTTDZVQi8xZmdBUkszQXNUUWdRS2p1Yk96S20wTGpHUWFBczFSK05HdGRSR2s2L1Z4TjZjSUV1UTZ4RkZhaWpGejZ4T1Bxa0FGSlZqWlJyTS8vOEo1dHAwcWl6T09jUk9OV1pnTEpObFBUT1NUbTh3bXN5V2Z6djlDRmFiM2VHazB1Z01Kb3ZONGZMNEFxRklMSkhLNUFxbFNxM1I2dlFHbzZtWnVZV2xsVFhNSUZLVWFESFlPTGg0K0FTRXRuYjJEbzVPemk2cGxpK0ZsZU14enlaQ0ZOekpRT1ZRU1RPeXpTTmswUXVxbk5oNlgxWWFNN3hPcXduZG1KcEVVRkgxemZqQWg0Wk5Mek5INk9JU3JMSUxmV2lFTklDL2x5NFpuUW9VWVhRQnlWT3FzcWVMU3dhNmtrWjFSbW1UelFOVEhPU1BRNEplL21tY210Qzh6eXlpWjBMSVFaVnRVbFcxaHI3UGdXRjRWSlVneGJyaWhyNkJ6U3M3NTdNZmdHVnVwZy9IbmlwajV1NmtDTlVRdWVjQ1E0b1g1UXd6S21tV1Zid0RxcW9FWGczSHlrakI4VTlhYnlBTXc0c2tqQnBVbjRtOFBiMVhKdGYrSXltbzRyQkVZR1JBNll0VkkxNGpwejJsSGwwUisrVGxtQUFBQUFBPVwiKSBmb3JtYXQoXCJ3b2ZmMlwiKTtcbn1cblxuLnd0aWNvbnMge1xuXHRsaW5lLWhlaWdodDogMTtcbn1cblxuLnd0aWNvbnM6YmVmb3JlIHtcblx0Zm9udC1mYW1pbHk6IHd0aWNvbnMgIWltcG9ydGFudDtcblx0Zm9udC1zdHlsZTogbm9ybWFsO1xuXHRmb250LXdlaWdodDogbm9ybWFsICFpbXBvcnRhbnQ7XG5cdHZlcnRpY2FsLWFsaWduOiB0b3A7XG59XG5cbi53dGljb24tYWNjb3VudDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwMVwiO1xufVxuLnd0aWNvbi1hZGQ6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMDJcIjtcbn1cbi53dGljb24tY2FzdWFsOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTAzXCI7XG59XG4ud3RpY29uLWNoZWNrOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTA0XCI7XG59XG4ud3RpY29uLWNoZWNrU21hbGw6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMDVcIjtcbn1cbi53dGljb24tY2hldnJvbjpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwNlwiO1xufVxuLnd0aWNvbi1jb3B5OmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTA3XCI7XG59XG4ud3RpY29uLWNvcHlTbWFsbDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwOFwiO1xufVxuLnd0aWNvbi1kaXNtaXNzOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTA5XCI7XG59XG4ud3RpY29uLWVycm9yOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTBhXCI7XG59XG4ud3RpY29uLWV4cGFuZDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwYlwiO1xufVxuLnd0aWNvbi1mZWVkYmFjazpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwY1wiO1xufVxuLnd0aWNvbi1maW5kOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTBkXCI7XG59XG4ud3RpY29uLWZvcm1hbDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwZVwiO1xufVxuLnd0aWNvbi1ncmF5TG9nbzpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwZlwiO1xufVxuLnd0aWNvbi1pZ25vcmU6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTBcIjtcbn1cbi53dGljb24taW5mbzpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExMVwiO1xufVxuLnd0aWNvbi1sZWZ0Q2hldnJvbjpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExMlwiO1xufVxuLnd0aWNvbi1sb2dvOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTEzXCI7XG59XG4ud3RpY29uLWxvdmU6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTRcIjtcbn1cbi53dGljb24tcGFzdGU6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTVcIjtcbn1cbi53dGljb24tcGluOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTE2XCI7XG59XG4ud3RpY29uLXByZW1pdW06YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTdcIjtcbn1cbi53dGljb24tcHJlbWl1bURldGFpbDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExOFwiO1xufVxuLnd0aWNvbi1wcmVtaXVtRnVsbDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExOVwiO1xufVxuLnd0aWNvbi1yZWZpbmU6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMWFcIjtcbn1cbi53dGljb24tcmV3cml0ZTpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExYlwiO1xufVxuLnd0aWNvbi1yaWdodENoZXZyb246YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMWNcIjtcbn1cbi53dGljb24tcm9ja2V0OmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTFkXCI7XG59XG4ud3RpY29uLXNlbnRlbmNlRXhhbXBsZXM6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMWVcIjtcbn1cbi53dGljb24tc2hvcnRlbjpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExZlwiO1xufVxuLnd0aWNvbi11bmxvY2s6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMjBcIjtcbn1cbi53dGljb24td2FybjpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyMVwiO1xufVxuLnd0aWNvbi14OmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTIyXCI7XG59XG4iXSwic291cmNlUm9vdCI6IiJ9 */
    </style>
</head>

<body data-new-gr-c-s-check-loaded="14.1007.0" data-gr-ext-installed="">
    <div class="container">
        <div id="header">
        </div>
        <main>
            <div class="equalHMWrap eqWrap max-width">
                <div class="equalHMV paddingBlock">
                    <p class="home-header-title"> Find the right event for <span class="main-color">you</span> </p>
                    <p class="lines-spacing"> From weddings to birthdays and all in between, the world needs speakers like
                        you. And not just any speaker - <i>really good ones</i>. If you think you've got the strongest, most
                        confident voice in the room, use it to broadcast a message that people want to hear. </p>
                    <p> <strong>Yeah, we didn't think it could get any better either.</strong> </p>
                    <p> </p>
                    <div class="margin-top-30 btn-group-home-header">
                        <button id="find-event-btn" class="main-color-background btn btn-default margin-right-30" style=""><i class="fas fa-map-marker-alt padding-right-10"></i>Find an Event</button> <a href="/appliedimagination/contact.html"><i class="fas fa-phone-alt padding-right-10 main-color"></i><strong> Get in Touch</strong></a>
                    </div>
                    <p></p>
                </div>
                <div class="equalHMV top-graphic"></div>
            </div>
            <div id="event" class="background-color-gray">
                <hr>
                <div data-read-aloud-multi-block="true">
                    <p class="paddingBlock home-events-title max-width"> Events for <span class="main-color">every
                            occasion</span> </p>
                </div>
                <div class="max-width">



                    <div class="grid-wrapper">

                        <div class="btn-group">
                            <button class="btn btn-search active allBtnSelector">All</button>

                            <button class="btn btn-search futureBtnSelector">In the Future</button>
                            <button class="btn btn-search pastBtnSelector">In the Past</button>
                        </div>

                        <div class="grid-container">



                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_array($result)) {

                                    $isDatePassed = 0;
                                    if (strtotime($row['date']) < time()) {
                                        $isDatePassed = 1;
                                    }

                                    echo "
                                 <div class='item zone' data-read-aloud-multi-block='true' eventsize='{$row['eventsize']}' cost='{$row['seatcost']}' is-passed='{$isDatePassed}'>
                                <p class='item-image'> <img src='{$row['eventimage']}' alt='Image'> </p>
                                <figcaption><i class='fas fa-user padding-right-10'></i>{$row['hostname']} ??? <span class='duration-in-hr'>{$row['eventlengthinhours']}</span> hrs</figcaption>
                                <p class='item-heading'> <span class='item-title'>
                                        {$row['name']}
                                    </span> <span class='item-details'>
                                        <span>{$row['date']}</span> ??? {$row['location']}
                                    </span> </p>
                            </div>
";
                                }
                                mysqli_free_result($result);
                            } else {
                                echo "<p class='lead'><em>No events were found.</em></p>";
                            }
                            ?>



                        </div>

                        <!-- <div class="text-center margin-top-15 margin-bottom-70" style="grid-row: none;"> <a href="/" class="main-color pager">
                                View More (100+)
                            </a> </div> -->

                        <aside class="side">

                            <div class="input-icons"> <i class="fas fa-search main-color"></i>
                                <input class="input-search" type="text" id="input-search" placeholder="Search by name or location..." autocomplete="off" name="input-search">
                            </div>
                            <div>
                                <label for="location">Event Location</label>
                                <div class="float-right">
                                    <select name="location" id="location">
                                        <option value="all">Everywhere</option>
                                        <option value="Atlanta">Atlanta, GA</option>
                                        <option value="Miami">Miami, FL</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="length-start">Event Length</label>
                                <div class="float-right">
                                    <select class="select-lenght" name="length-start" id="length-start">
                                        <option value="1">1 hour</option>
                                        <option value="2">2 hours</option>
                                        <option value="3">3 hours</option>
                                        <option value="4">4 hours</option>
                                    </select>
                                    <label class="lblto" for="length-end">to</label>
                                    <select class="select-lenght" name="length-end" id="length-end">
                                        <option value="2">2 hours</option>
                                        <option value="3">3 hours</option>
                                        <option value="4" selected>4 hours</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-right">
                                <label class="float-left margin-top-8 lblseat-cost" for="mincost">Seat Cost</label> <span class="input-cost left">
                                    <input class="input-min-cost cost-input" type="text" id="mincost" name="mincost" size="7" maxlength="5" placeholder="Min" autocomplete="off">
                                </span>
                                <label class="lblto" for="maxcost">to</label> <span class="input-cost left">
                                    <input class="input-max-cost cost-input" type="text" id="maxcost" name="maxcost" size="7" maxlength="5" placeholder="Max" autocomplete="off">
                                </span>
                            </div>
                            <div>
                                <label>Event Size</label>
                            </div>
                            <div id="slider"></div>
                        </aside>
                    </div>



                </div>
            </div>
        </main>
        <div id="footer">
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#header').load('./public/layout/header.html', function() {
                $("#home").css('color', '#fb5f53');
            });
            $('#footer').load('./public/layout/footer.html');
            var slider = document.getElementById('slider');
            noUiSlider.create(slider, {
                start: [20, 500],
                connect: true,
                step: 20,
                tooltips: [true, true],
                range: {
                    'min': 0,
                    'max': 600
                },
                format: wNumb({
                    decimals: 0
                })
            });





            $('.btn-search').on('click', function() {
                $('.btn-search').removeClass('active');
                $(this).addClass('active');
            });
            $("#find-event-btn").click(function(e) {
                e.preventDefault();
                var position = $("#event").offset().top;
                $("body, html").animate({
                    scrollTop: position
                } /* speed */ );
            });
        });











        $(document).ready(function() {
            $('#input-search').on('input', function(e) {
                e.preventDefault();
                var query = $("#input-search").val().toLowerCase();
                $(".item.zone").each(function() {
                    var eventName = $(this).find('.item-title').text().toLowerCase();
                    var eventLocation = $(this).find('.item-details').text().toLowerCase();
                    console.log(`EventName: ${eventName} & Event Location: ${eventLocation} & query: ${query}`);
                    $(this).fadeOut();
                    if (eventName.indexOf(query) > -1 || eventLocation.indexOf(query) > -1) {
                        $(this).fadeIn();
                    }
                    // else {
                    //     $(".item.zone").each(function() {
                    //         $(this).fadeIn();
                    //     });
                    // }
                });
            });


            $('#location').on('change', function(e) {
                var valueSelected = this.value;
                $(".item.zone").each(function() {
                    // var optionSelected = $("option:selected", this);
                    var eventLocation = $(this).find('.item-details').text().toLowerCase();
                    $(this).fadeOut();
                    if (eventLocation.indexOf(valueSelected.toLowerCase()) > -1) {
                        $(this).fadeIn();
                    } else if (valueSelected == "all") {
                        $(this).fadeIn();
                    }
                });

            });






            $('.select-lenght').on('change', function(e) {
                var minHour = $('#length-start').val() || 0;
                var maxHour = $('#length-end').val() || Number.MAX_SAFE_INTEGER;

                $(".item.zone").each(function() {
                    var eventHours = $(this).find('.duration-in-hr').text().toLowerCase();

                    $(this).fadeOut();
                    if (inRange(eventHours, minHour, maxHour)) {
                        $(this).fadeIn();
                    }
                });

            });




            $('.cost-input').on('change', function(e) {
                var minValue = $('#mincost').val() || 0;
                var maxValue = $('#maxcost').val() || Number.MAX_SAFE_INTEGER;

                $(".item.zone").each(function() {
                    var eventCost = $(this).attr('cost');
                    $(this).fadeOut();
                    if (inRange(eventCost, minValue, maxValue)) {
                        $(this).fadeIn();
                    }
                });

            });






            $(slider).on('click', function() {
                requestedEventSize = slider.noUiSlider.get();
                $(".item.zone").each(function() {
                    var eventSize = $(this).attr('eventsize');
                    $(this).fadeOut();
                    if (inRange(eventSize, requestedEventSize[0], requestedEventSize[1])) {
                        $(this).fadeIn();
                    }
                });


            });





            $(".noUi-handle-lower").bind('change', function(e) {
                //just grabbing some values to show.
                alert($(this).attr('aria-valuenow'), $(this).attr('aria-valuemax'));
                e.preventDefault();
            })




            $(".pastBtnSelector").click(function() {
                $(".item.zone").each(function() {
                    var isPassed = $(this).attr('is-passed');
                    if (isPassed == "0") {
                        $(this).fadeOut();
                    } else {
                        $(this).fadeIn();
                    }
                });
            });


            $(".futureBtnSelector").click(function() {
                $(".item.zone").each(function() {
                    var isPassed = $(this).attr('is-passed');
                    if (isPassed == "1") {
                        $(this).fadeOut();
                    } else {
                        $(this).fadeIn();
                    }
                });
            });


            $(".allBtnSelector").click(function() {
                $(".item.zone").each(function() {
                    $(this).fadeIn();
                });
            });



            function resetAllEventView() {
                $(".item.zone").each(function() {
                    $(this).fadeIn();
                });
            }








        });

        function inRange(x, min, max) {
            return ((x - min) * (x - max) <= 0);
        }
    </script>
</body>

</html>




<?php
// include "footer.php";
?>