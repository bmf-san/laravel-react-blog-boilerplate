import React, { Component } from 'react';
import React, { Component } from 'react';
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';
import { fetchPosts } from '../actions/index';
import { Link } from 'react-router';

class Posts extends Component {
  componentWillMount() {
    this.props.fetchPosts();
  }

  renderPosts() {
    return this.props.posts.map((post) => {

      {console.log(post.tags[0].name)} // this call tag's name

      return (
        <li key={post.id}>
          <Link to={`post/${post.id}`}>
            <h1>{post.title}</h1>
            <span>{post.category.name}</span>
          </Link>
        </li>
      );
    });
  }

  render() {
    return (
      <div>
        <h3>Posts</h3>
        <ul>
          {this.renderPosts()}
        </ul>
      </div>
    );
  }
}

function mapStateToProps(state) {
  return {
    posts: state.posts.all
  };
}

export default connect(mapStateToProps, { fetchPosts })(Posts);
