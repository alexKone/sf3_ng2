import { ApiLabPage } from './app.po';

describe('api-lab App', function() {
  let page: ApiLabPage;

  beforeEach(() => {
    page = new ApiLabPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
