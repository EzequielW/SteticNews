<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/EzequielW/SteticNews">
    <img src="images/laravel_logo.png" alt="Logo" width="80" height="80">
  </a>

<h3 align="center">Stetic News</h3>

  <p align="center">
    News site with tweeter-like feed
    <br />
    <a href="https://github.com/EzequielW/SteticNews"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/EzequielW/SteticNews">View Demo</a>
    ·
    <a href="https://github.com/EzequielW/SteticNews/issues">Report Bug</a>
    ·
    <a href="https://github.com/EzequielW/SteticNews/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

[![Product Name Screen Shot][product-screenshot]](https://stetic-news.netlify.app/)

Stetic News is a simple news feed with search functionality and pagination, each news has a set category 
and can belong or not to a region. There are hidden optionals tags for every post to help the search.

You can find a live version [here](https://stetic-news.netlify.app/)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

* [![Vue][Vue.js]][Vue-url]
* [![Laravel][Laravel.com]][Laravel-url]
* [![MySQL][MySQL.com]][MySQL-url]
* [![Quasar][Quasar.com]][Quasar-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites

* [MySQL install](https://dev.mysql.com/downloads/installer/)
* [php install](https://www.php.net/downloads.php)
* [composer install](https://getcomposer.org/download/)
* [npm install](https://nodejs.org/en/download/)
* Install vue cli
    ```sh
    npm install -g @vue/cli
    ```

### Installation

1. Clone the repo
    ```sh
    git clone https://github.com/EzequielW/SteticNews.git
    ```
2. Install NPM packages under `/client`
    ```sh
    npm install
    ```
3. Create `.env.local` file under `/client` with the port on which you're gonna run the server
    ```sh
    VUE_APP_SERVER_URL=http://localhost:8000/api/v1
    ```
4. You may have to edit your `php.ini` file in order to enable required extensions search `extension=pdo_mysql`, `extension=openssl`, `extension=fileinfo` 
and remove the semicolon `;`

5. Install Composer packages under `/server`
    ```sh
    composer install
    ```
6. Create schema on MySQL
    ```sql
    create schema steticnews
    ```
7. Create .env file under `/server` (you can copy .env.example) and change db variables
    ```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=steticnews
    DB_USERNAME=root
    DB_PASSWORD=password
    ```
8. Generate app encryption key
    ```sh
    php artisan key:generate
    ```
9. Optionally load fake data
    ```sh
    php artisan migrate:fresh --seed
    ```
10. Run `/server` and `/client`
    ```sh
    php artisan serve
    ```
    ```sh
    vue serve
    ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

There are api docs available in `http://localhost:8000/request-docs`

[![Docs Screenshot][docs-screenshot]](http://localhost:8000/request-docs)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ROADMAP
## Roadmap

- [ ] Feature 1
- [ ] Feature 2
- [ ] Feature 3
    - [ ] Nested Feature

See the [open issues](https://github.com/EzequielW/SteticNews/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#readme-top">back to top</a>)</p> -->



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>
 -->


<!-- CONTACT -->
## Contact

Ezequiel Baez Wokraczka - ezequielwokraczka@gmail.com

Project Link: [https://github.com/EzequielW/SteticNews](https://github.com/EzequielW/SteticNews)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

* [Laravel Documentation](https://laravel.com/docs/9.x)
* [Build a REST API With Laravel](https://www.youtube.com/watch?v=YGqCZjdgJJk)
* [Vue.js Documentation](https://vuejs.org/guide/introduction.html)
* [Quasar Documentation](https://quasar.dev/)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/EzequielW/SteticNews.svg?style=for-the-badge
[contributors-url]: https://github.com/EzequielW/SteticNews/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/EzequielW/SteticNews.svg?style=for-the-badge
[forks-url]: https://github.com/EzequielW/SteticNews/network/members
[stars-shield]: https://img.shields.io/github/stars/EzequielW/SteticNews.svg?style=for-the-badge
[stars-url]: https://github.com/EzequielW/SteticNews/stargazers
[issues-shield]: https://img.shields.io/github/issues/EzequielW/SteticNews.svg?style=for-the-badge
[issues-url]: https://github.com/EzequielW/SteticNews/issues
[license-shield]: https://img.shields.io/github/license/EzequielW/SteticNews.svg?style=for-the-badge
[license-url]: https://github.com/EzequielW/SteticNews/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/ezequiel-baez-149319190
[product-screenshot]: images/screenshot.png
[docs-screenshot]: images/docs-screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 
[MySQL.com]: https://img.shields.io/badge/MySQL-0769AD?style=for-the-badge&logo=mysql&logoColor=white
[MySQL-url]: https://mysql.com 
[Quasar.com]: https://img.shields.io/badge/Quasar-black?style=for-the-badge&logo=quasar&logoColor=ADD8E6
[Quasar-url]: https://Quasar.com