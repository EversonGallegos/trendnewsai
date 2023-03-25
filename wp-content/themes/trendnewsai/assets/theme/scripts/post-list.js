import { getRequest } from "../../../http/index.js";

const postList = document.querySelector('.post-list');

const getPostList = async () => {
  const API_URL = '/wp/v2/posts';
  const response = await getRequest(API_URL);
  return response
}

const getAuthorData = async (id) => {
  const API_URL = `/wp/v2/users/${id}`;
  const response = await getRequest(API_URL);
  return response
}

const Post = async (id, content, title, author, link) => {
  const post = document.createElement('div');
  const author_data = await getAuthorData(author);
  post.classList.add("post");
  post.setAttribute('data-id', id);
  post.innerHTML = `<div class="post--header">
      <a class="post--author-link" href="${author_data.link}">
        <img class="post--author-image" src="${author_data.avatar_urls['96']}" alt="${author_data.name}" />
      </a>
      <p class="post--author-name">
        <a class="post--author-link" href="${author_data.link}">${author_data.name}</a>
      </p>
    </div>
    <div class="post--group-content">
      <a href="${link}">
        <h1 class="post--title">${title}</h1>
        <div class="post--content">
          ${content}
        </div>
      </a>
    </div>
    <div class="post--aux-buttons">
      <span class="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#000000" viewBox="0 0 256 256">
          <rect width="25" height="25" fill="none"></rect>
          <path d="M77.4,201.9l-32.3,27A8,8,0,0,1,32,222.8V64a8,8,0,0,1,8-8H216a8,8,0,0,1,8,8V192a8,8,0,0,1-8,\
            8H82.5A7.8,7.8,0,0,0,77.4,201.9Z" fill="none" stroke="#000000" stroke-linecap="round" 
            stroke-linejoin="round" stroke-width="16">
          </path>
        </svg>
      </span>
      <span class="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#000000" viewBox="0 0 256 256">
          <rect width="25" height="25" fill="none"></rect>
          <polyline points="176 152 224 104 176 56" fill="none" stroke="#000000" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="16">
          </polyline>
          <path d="M192,216H40a8,8,0,0,1-8-8V88" fill="none" stroke="#000000" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="16"></path><path d="M75,176a96.1,96.1,0,0,1,93-72h56" 
            fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
          </path>
        </svg>
      </span>
    </div>
    `;
  return post;
}

const setPostList = async () => {
  const posts = await getPostList();
  posts.forEach(async (post, id) => {
    const {
      excerpt: { rendered: excerpt },
      title: { rendered: title },
      author,
      link
    } = post;

    const postElement = await Post(
      id,
      excerpt,
      title,
      author,
      link
    )
    postList.appendChild(postElement);
  });
}

setPostList();